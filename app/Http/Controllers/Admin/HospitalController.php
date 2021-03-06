<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use\Image;
use DB;
use Brian2694\Toastr\Facades\Toastr;

class HospitalController extends Controller
{
    public function index()
    {   
        $categories= DB::table('tbl_hospital')->orderBy('id', 'DESC')->get();

       return view('admin.hospital.index',['categories'=>$categories]);
    }

   
    public function create()
    {
        return view('admin.hospital.create');
    }

    
    
    public function store(Request $request)
    {
       $request->validate([

            'name' => 'required',
            'address' => 'required',
            'mobile' => 'required'

        ]);

      
       $data = array();
       $data['name']= $request->get('name');
       $data['address']= $request->get('address');
       $data['mobile']= $request->get('mobile');

       $query_insert = DB::table('tbl_hospital')->insert($data);
       
       Toastr::success('Successully Add 🙂' ,'Success');
       return redirect()->route('admin.hospital')->with('message','Registered succesfully');
       
    }

   
    public function edit($id)
    {
        $category = DB::table('tbl_hospital')->where('id', $id)->first();

        return view('admin.hospital.edit',['category'=>$category]);

    }

   
    public function update(Request $request)
    {

            DB::table('tbl_hospital')->where('id', $request->id)->update([

                'name'=>$request->name,
                'address' => $request->address,
                'mobile' => $request->mobile,
                'status' => $request->status,


           ]);

        
      
       Toastr::success('Successully Updated 🙂' ,'Success');

        return redirect()->route('admin.hospital');
    }

    
    public function destroy($id)
    {
        $category = DB::table('tbl_hospital')->where('id', $id)->delete();

        Toastr::warning('Successully Deleted 🙂' ,'Success');

        return redirect()->route('admin.hospital');
    }
}
