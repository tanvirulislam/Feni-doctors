<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use\Image;
use\App\Category;
use DB;
use Brian2694\Toastr\Facades\Toastr;

class CategoryController extends Controller
{
    public function index()
    {   
        $categories= DB::table('tbl_category')->get();

       return view('admin.category.index',['categories'=>$categories]);
    }

   
    public function create()
    {
        return view('admin.category.create');
    }

    protected function imageUpload($request){
        $productImage = $request->file('cat_img');
        $imageName = $productImage->getClientOriginalName();
        $directory = 'public/upload/';
        $imageUrl = $directory.$imageName;
        Image::make($productImage)->resize(400,400)->save($imageUrl);
        return $imageUrl;
    }
    
    public function store(Request $request)
    {
       $request->validate([

            'cat_name' => 'required',

        ]);

        if($request->file('cat_img')!==null){
            $image=$this->imageUpload($request);
        }else{
           $image=null;
       }

       $data = array();
       $data['cat_name']= $request->get('cat_name');
       $data['cat_img']= $image;

       $query_insert = DB::table('tbl_category')->insert($data);

       
       Toastr::success('Successully Add 🙂' ,'Success');
        return redirect()->route('admin.category')->with('message','Registered succesfully');

       
    }

   
    public function edit($id)
    {
        $category = DB::table('tbl_category')->where('id', $id)->first();

        return view('admin.category.edit',['category'=>$category]);

    }

   
    public function update(Request $request)
    {

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('user-photo/',$filename);

            DB::table('tbl_category')->where('id', $request->id)->update([

                'cat_name'=>$request->cat_name, 
                'cat_img'=>$filename
                
            ]);

        }else{
            DB::table('tbl_category')->where('id', $request->id)->update([

                'cat_name'=>$request->cat_name,

           ]);

        }
      
       Toastr::success('Successully Updated 🙂' ,'Success');

        return redirect()->route('admin.category');
    }

    
    public function destroy($id)
    {
        $category = DB::table('tbl_category')->where('id', $id)->delete();

        Toastr::warning('Successully Deleted 🙂' ,'Success');

        return redirect()->route('admin.category');
    }

}
