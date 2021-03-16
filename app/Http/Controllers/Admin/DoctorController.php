<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use\Image;
use DB;
use Brian2694\Toastr\Facades\Toastr;

class DoctorController extends Controller
{
    public function index()
    {   
        $categories= DB::table('tbl_category')->get();
        $doctor= DB::table('tbl_doctor')->get();

       return view('admin.add_doctor.index',['doctor'=>$doctor, 'categories'=>$categories]);
    }

   
    public function create()
    {
        $categories= DB::table('tbl_category')->get();
        return view('admin.add_doctor.create', compact('categories'));
    }

 
    
    public function store(Request $request){
        
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
       $data['reg_no']= $request->get('reg_no');
       $data['chamber']= $request->get('chamber');
       $data['status']= $request->get('status');

        $query_insert = DB::table('tbl_doctor')->insert($data);
       
        Toastr::success('Successully Add 🙂' ,'Success');

        return redirect()->route('admin.doctor')->with('message','Registered succesfully');

       
    }

   
    public function edit($id)
    {
        $category = DB::table('tbl_doctor')->where('id', $id)->first();

        return view('admin.add_doctor.edit',['category'=>$category]);

    }

   
    public function update(Request $request)
    {

      
            DB::table('tbl_doctor')->where('id', $request->id)->update([

                'name'=>$request->name,
                'category'=>$request->category,
                'degree'=>$request->degree,
                'designation'=>$request->designation,
                'specialist'=>$request->specialist,
                'reg_no'=>$request->reg_no,
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
}
