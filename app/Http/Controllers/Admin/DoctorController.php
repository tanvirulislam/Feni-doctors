<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use\Image;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Chamber;

class DoctorController extends Controller
{
    public function index()
    {   
        $chamber = DB::table('chambers')->get();
        $categories= DB::table('tbl_category')->get();
        $doctor= DB::table('tbl_doctor')->orderBy('id', 'DESC')->get();

       return view('admin.add_doctor.index',['doctor'=>$doctor, 'categories'=>$categories,
        'chamber'=>$chamber]);
    }

   
    public function create()
    {
        $categories= DB::table('tbl_category')->get();
       
        return view('admin.add_doctor.create', compact('categories'));
    }

 
    
    public function store(Request $request){
        // dd($request);
       $request->validate([
            'name' => 'required',
            'category' => 'required',
            'degree' => 'required',
            'specialist' => 'required',
            'reg_no' => 'required',
            'chamber' => 'required',
            'status' => 'required'

        ]);

       $data = array();
       $data['name']= $request->get('name');
       $data['category']= $request->get('category');
       $data['degree']= $request->get('degree');
       $data['designation']= $request->get('designation');
       $data['specialist']= $request->get('specialist');
       $data['working_place']= $request->get('working_place');
       $data['reg_no']= $request->get('reg_no');
       $data['status']= $request->get('status');

        DB::table('tbl_doctor')->insert($data);

        // $regi_no=$request->reg_no;
        $doc_id = DB::table('tbl_doctor')->where('name', $request->get('name'))->value('id');

       foreach($request->chamber as $chamber){
            $data = array();
            $data['doctor_id']= $doc_id;
            $data['more_chamber']= $chamber;

            DB::table('chambers')->insert($data);

       }
        Toastr::success('Successully Add 🙂' ,'Success');

        return redirect()->route('admin.doctor')->with('message','Registered succesfully');

       
    }

   
    public function edit($id)
    {
        $categories= DB::table('tbl_category')->get();
        
        $doctor= DB::table('tbl_doctor')->where('id', $id)->first();
        $chamber = DB::table('chambers')->get();


        return view('admin.add_doctor.edit',['categories'=>$categories, 'doctor'=>$doctor, 'chamber'=>$chamber]);

    }

   
    public function update(Request $request){
        
        DB::table('tbl_doctor')->where('id', $request->id)->update([

                'name'=>$request->name,
                'category'=>$request->category,
                'degree'=>$request->degree,
                'designation'=>$request->designation,
                'specialist'=>$request->specialist,
                'reg_no'=>$request->reg_no,
                'working_place'=>$request->working_place,
                'chamber'=>$request->chamber,
                'status'=>$request->status,

           ]);
      
       Toastr::success('Successully Updated 🙂' ,'Success');

        return redirect()->route('admin.doctor');
    }

    
    public function destroy($id)
    {
        DB::table('tbl_doctor')->where('id', $id)->delete();

        Toastr::warning('Successully Deleted 🙂' ,'Success');

        return redirect()->route('admin.doctor');
    }

    public function edit_chember($id){
        
       $chamber_one = DB::table('tbl_doctor')->where('id', $id)->first();
       $chamber_more = DB::table('chambers')->where('doctor_id', $id)->get();
       $doctor_id = $id;

        return view('admin.add_doctor.edit_chamber', compact('chamber_one', 'chamber_more', 'doctor_id'));
 
    }

    public function update_chember(Request $request){
        // doctor table chamber field update
        DB::table('tbl_doctor')->where('id', $request->doctor_id)->update([
            'chamber' => $request->chamber,
        ]);
        // doctor table chamber field update
        DB::table('chambers')->where('doctor_id', $request->doctor_id)->delete();

        // chamber field update

        foreach($request->more_chamber as $chamber){
            $data = array();
            $data['doctor_id']= $request->doctor_id;
            $data['more_chamber']= $chamber;

            DB::table('chambers')->insert($data);

       }
           
        return redirect()->route('admin.doctor');
        
    }

    public function customize_doc_list(){

        $doctor= DB::table('tbl_doctor')->orderBy('dr', 'ASC')->get();

        return view('admin.customise_doc_list.customize_doc_list', compact('doctor'));
    }

    public function updateItems(Request $request)
    {
        

        if($request->has('ids')){
            $arr = explode(',',$request->input('ids'));
            
            foreach($arr as $sortOrder => $id){
                $menu = DB::table('tbl_doctor')->where('id', $id)->update([
                    'dr'=>$sortOrder,
                ]);
            
            }
            return ['success'=>true,'message'=>'Updated'];
        }
  
    }

    public function search(Request $request){

        $search = $request->search;
       
        $doctor = DB::table('tbl_doctor')
                ->where('name','LIKE','%'.$search.'%')
                ->get();

        return view('admin.customise_doc_list.search_doctor', compact('doctor'));
    }

}
