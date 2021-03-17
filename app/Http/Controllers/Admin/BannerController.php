<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use\Image;
use DB;
use Brian2694\Toastr\Facades\Toastr;

class BannerController extends Controller
{
    public function index()
    {   
        $categories= DB::table('tbl_image')->orderBy('id', 'DESC')->get();

       return view('admin.banner.index',['categories'=>$categories]);
    }

   
    public function create()
    {
        return view('admin.banner.create');
    }

    protected function imageUpload($request){
        $productImage = $request->file('image');
        $imageName = $productImage->getClientOriginalName();
        $directory = 'public/upload/';
        $imageUrl = $directory.$imageName;
        Image::make($productImage)->resize(400,400)->save($imageUrl);
        return $imageUrl;
    }
    
    public function store(Request $request)
    {
       $request->validate([

            'image' => 'required',

        ]);

        if($request->file('image')!==null){
            $image=$this->imageUpload($request);
        }else{
           $image=null;
       }

       $data = array();
       $data['image']= $image;

       $query_insert = DB::table('tbl_image')->insert($data);

       
       Toastr::success('Successully Add 🙂' ,'Success');
        return redirect()->route('admin.banner')->with('message','Registered succesfully');

       
    }

   
    public function edit($id)
    {
        $category = DB::table('tbl_image')->where('id', $id)->first();

        return view('admin.banner.edit',['category'=>$category]);

    }

   
    public function update(Request $request)
    {

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('user-photo/',$filename);

            DB::table('tbl_image')->where('id', $request->id)->update([

               
                'image'=>$filename,
                'status'=>$request->status,
                
            ]);

        }
        else{
            DB::table('tbl_image')->where('id', $request->id)->update([

                'status'=>$request->status,

           ]);

        }
      
       Toastr::success('Successully Updated 🙂' ,'Success');

        return redirect()->route('admin.banner');
    }

    
    public function destroy($id)
    {
        $category = DB::table('tbl_image')->where('id', $id)->delete();

        Toastr::warning('Successully Deleted 🙂' ,'Success');

        return redirect()->route('admin.banner');
    }
}
