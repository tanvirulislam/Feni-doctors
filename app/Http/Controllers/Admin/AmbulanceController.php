<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;

class AmbulanceController extends Controller
{
    public function index()
    {   
        $categories= DB::table('tbl_ambulance')->orderBy('id', 'DESC')->get();

       return view('admin.ambulance.index',['categories'=>$categories]);
    }

   
    public function create()
    {
        return view('admin.ambulance.create');
    }

    
    
    public function store(Request $request)
    {
       $request->validate([

            'name' => 'required',
            'mobile' => 'required'

        ]);

      
       $data = array();
       $data['name']= $request->get('name');
       $data['mobile']= $request->get('mobile');

       $query_insert = DB::table('tbl_ambulance')->insert($data);
       
       Toastr::success('Successully Add 🙂' ,'Success');
       return redirect()->route('admin.ambulance')->with('message','Registered succesfully');
       
    }

   
    public function edit($id)
    {

        $category = DB::table('tbl_ambulance')->where('id', $id)->first();
        return view('admin.ambulance.edit',['category'=>$category]);

    }

   
    public function update(Request $request)
    {

            DB::table('tbl_ambulance')->where('id', $request->id)->update([

                'name'=>$request->name,
                'mobile' => $request->mobile,
                'status' => $request->status,


           ]);

        
      
       Toastr::success('Successully Updated 🙂' ,'Success');

        return redirect()->route('admin.ambulance');
    }

    
    public function destroy($id)
    {
        $category = DB::table('tbl_ambulance')->where('id', $id)->delete();

        Toastr::warning('Successully Deleted 🙂' ,'Success');

        return redirect()->route('admin.ambulance');
    }
}
