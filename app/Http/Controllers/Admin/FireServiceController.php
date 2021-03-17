<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;


class FireServiceController extends Controller
{
    public function index()
    {   
        $categories= DB::table('tbl_fireservice')->orderBy('id', 'DESC')->get();

       return view('admin.fire_service.index',['categories'=>$categories]);
    }

   
    public function create()
    {
        return view('admin.fire_service.create');
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

       $query_insert = DB::table('tbl_fireservice')->insert($data);
       
       Toastr::success('Successully Add 🙂' ,'Success');
       return redirect()->route('admin.fire-service')->with('message','Registered succesfully');
       
    }

   
    public function edit($id)
    {

        $category = DB::table('tbl_fireservice')->where('id', $id)->first();
        return view('admin.fire_service.edit',['category'=>$category]);

    }

   
    public function update(Request $request)
    {

            DB::table('tbl_fireservice')->where('id', $request->id)->update([

                'name'=>$request->name,
                'mobile' => $request->mobile,
                'status' => $request->status,

           ]);

        
      
       Toastr::success('Successully Updated 🙂' ,'Success');

        return redirect()->route('admin.fire-service');
    }

    
    public function destroy($id)
    {
        $category = DB::table('tbl_fireservice')->where('id', $id)->delete();

        Toastr::warning('Successully Deleted 🙂' ,'Success');

        return redirect()->route('admin.fire-service');
    }
}
