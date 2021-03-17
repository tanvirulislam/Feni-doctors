<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;

class BloodDonorController extends Controller
{
    public function index()
    {   
        $categories= DB::table('tbl_blooddonor')->orderBy('id', 'DESC')->get();
        $blood_group = DB::table('tbl_bloodgroup')->get();

       return view('admin.blood_donor.index',['categories'=>$categories, 'blood_group'=> $blood_group]);
    }

   
    public function create()
    {
        $categories= DB::table('tbl_blooddonor')->orderBy('id', 'DESC')->get();
        $blood_group = DB::table('tbl_bloodgroup')->get();

        return view('admin.blood_donor.create', ['categories'=>$categories, 'blood_group'=> $blood_group]);

    }

    
    
    public function store(Request $request)
    {
       $request->validate([

        'blood_group' => 'required',
            'name' => 'required',
            'address' => 'required',
            'mobile' => 'required'

        ]);

      
       $data = array();
       $data['name']= $request->get('name');
       $data['address']= $request->get('address');
       $data['mobile']= $request->get('mobile');
       $data['blood_group']= $request->get('blood_group');

       $query_insert = DB::table('tbl_blooddonor')->insert($data);
       
       Toastr::success('Successully Add 🙂' ,'Success');
       return redirect()->route('admin.blood_donor')->with('message','Registered succesfully');
       
    }

   
    public function edit($id)
    {
        $blood_group = DB::table('tbl_bloodgroup')->get();
        $category = DB::table('tbl_blooddonor')->where('id', $id)->first();

        return view('admin.blood_donor.edit',['category'=>$category, 'blood_group'=>$blood_group]);

    }

   
    public function update(Request $request)
    {

            DB::table('tbl_blooddonor')->where('id', $request->id)->update([

                'blood_group'=>$request->blood_group,
                'name'=>$request->name,
                'address' => $request->address,
                'status' => $request->status,
                'mobile' => $request->mobile,


           ]);

        
      
       Toastr::success('Successully Updated 🙂' ,'Success');

        return redirect()->route('admin.blood_donor');
    }

    
    public function destroy($id)
    {
        $category = DB::table('tbl_blooddonor')->where('id', $id)->delete();

        Toastr::warning('Successully Deleted 🙂' ,'Success');

        return redirect()->route('admin.blood_donor');
    }
}
