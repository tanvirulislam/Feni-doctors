<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;
use App\Chamber;
use Brian2694\Toastr\Facades\Toastr;


class FrontController extends Controller
{
    public function front(){

        $firstSlide = DB::table('tbl_image')->where('situation',1)->where('status',1)->first();
        $secondSlide = DB::table('tbl_image')->where('situation',2)->where('status',1)->first();
        $thirdSlide = DB::table('tbl_image')->where('situation',3)->where('status',1)->first();

        $banner = DB::table('tbl_category')->get();
        $doctor = DB::table('tbl_doctor')->where('status', 1)->get();

        return view('front_end.index', compact('doctor', 'firstSlide', 'secondSlide', 'thirdSlide', 'banner'));
    }

    public function search_doctor(Request $request){
       
        $chamber = DB::table('chambers')->get();
        $categories= DB::table('tbl_category')->get();
        $firstSlide = DB::table('tbl_image')->where('situation',1)->where('status',1)->first();
        $secondSlide = DB::table('tbl_image')->where('situation',2)->where('status',1)->first();
        $thirdSlide = DB::table('tbl_image')->where('situation',3)->where('status',1)->first();
        $banner = DB::table('tbl_category')->get();
        $doctor = DB::table('tbl_doctor')->where('status', 1)->where('category',$request->search)->orderBy('dr', 'ASC')->get();
        $departmentName =DB::table('tbl_category')->where('id',$request->search)->value('cat_name');

        $doctorr = DB::table('tbl_doctor')->where('status', 1)->first();

        return view('front_end.doctor_info', compact('departmentName','doctorr','chamber','banner', 'doctor', 'categories', 'firstSlide', 'secondSlide', 'thirdSlide'));

    }

    // ambulanceeeeeeeeeeeeeeeeeeeeeee
    public function ambulance()
    {   
        $categories= DB::table('tbl_ambulance')->orderBy('id', 'DESC')->get();
        $Doctorcategory = DB::table('tbl_category')->get();
        $banner = DB::table('tbl_category')->get();

        $firstSlide = DB::table('tbl_image')->where('situation',1)->where('status',1)->first();
        $secondSlide = DB::table('tbl_image')->where('situation',2)->where('status',1)->first();
        $thirdSlide = DB::table('tbl_image')->where('situation',3)->where('status',1)->first();

       return view('front_end.ambulance.test',['categories'=>$categories,'Doctorcategory'=>$Doctorcategory,'firstSlide'=>$firstSlide,
       'secondSlide'=>$secondSlide,'thirdSlide'=>$thirdSlide, 'banner'=>$banner]);
    }

   
    public function ambulance_create()
    {
        $banner = DB::table('tbl_category')->get();
        $firstSlide = DB::table('tbl_image')->where('situation',1)->where('status',1)->first();
        $secondSlide = DB::table('tbl_image')->where('situation',2)->where('status',1)->first();
        $thirdSlide = DB::table('tbl_image')->where('situation',3)->where('status',1)->first();
        return view('front_end.ambulance.create', compact('firstSlide', 'secondSlide', 'thirdSlide', 'banner'));
    }

    
    
    public function ambulance_store(Request $request)
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
       return redirect()->route('alloambulance')->with('message','Registered succesfully');
       
    }
    // fireservice-------------------------------------------
    public function fireservice()
    {   
        $categories= DB::table('tbl_fireservice')->orderBy('id', 'DESC')->get();
        $Doctorcategory = DB::table('tbl_category')->get();
        $banner = DB::table('tbl_category')->get();
        
        $firstSlide = DB::table('tbl_image')->where('situation',1)->where('status',1)->first();
        $secondSlide = DB::table('tbl_image')->where('situation',2)->where('status',1)->first();
        $thirdSlide = DB::table('tbl_image')->where('situation',3)->where('status',1)->first();

       return view('front_end.fireservice.test',['categories'=>$categories,'Doctorcategory'=>$Doctorcategory,'firstSlide'=>$firstSlide,
       'secondSlide'=>$secondSlide,'thirdSlide'=>$thirdSlide, 'banner'=>$banner]);
    }

   
    public function fireservicee_create()
    {
        $banner = DB::table('tbl_category')->get();
        
        $firstSlide = DB::table('tbl_image')->where('situation',1)->where('status',1)->first();
        $secondSlide = DB::table('tbl_image')->where('situation',2)->where('status',1)->first();
        $thirdSlide = DB::table('tbl_image')->where('situation',3)->where('status',1)->first();
        return view('front_end.fireservice.create', compact('firstSlide', 'secondSlide', 'thirdSlide', 'banner'));
    }

    
    
    public function fireservice_store(Request $request)
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
       return redirect()->route('fireservice')->with('message','Registered succesfully');
       
    }

    // police-------------------
    public function police()
    {   
        $categories= DB::table('tbl_police')->orderBy('id', 'DESC')->get();
        $Doctorcategory = DB::table('tbl_category')->get();
        $banner = DB::table('tbl_category')->get();
        
        $firstSlide = DB::table('tbl_image')->where('situation',1)->where('status',1)->first();
        $secondSlide = DB::table('tbl_image')->where('situation',2)->where('status',1)->first();
        $thirdSlide = DB::table('tbl_image')->where('situation',3)->where('status',1)->first();

       return view('front_end.police.test',['categories'=>$categories,'Doctorcategory'=>$Doctorcategory,'firstSlide'=>$firstSlide,
       'secondSlide'=>$secondSlide,'thirdSlide'=>$thirdSlide, 'banner'=>$banner]);
    }

   
    public function police_create()
    {
        $banner = DB::table('tbl_category')->get();

        $firstSlide = DB::table('tbl_image')->where('situation',1)->where('status',1)->first();
        $secondSlide = DB::table('tbl_image')->where('situation',2)->where('status',1)->first();
        $thirdSlide = DB::table('tbl_image')->where('situation',3)->where('status',1)->first();

        return view('front_end.police.create', compact('firstSlide', 'secondSlide', 'thirdSlide', 'banner'));
    }

    
    
    public function police_store(Request $request)
    {
       $request->validate([

            'name' => 'required',
            'mobile' => 'required'

        ]);

      
       $data = array();
       $data['name']= $request->get('name');
       $data['mobile']= $request->get('mobile');

       $query_insert = DB::table('tbl_police')->insert($data);
       
       Toastr::success('Successully Add 🙂' ,'Success');
       return redirect()->route('police')->with('message','Registered succesfully');
       
    }

    // hospital------------------
    
    public function hospital()
    {   
        $categories= DB::table('tbl_hospital')->orderBy('id', 'DESC')->get();
        $Doctorcategory = DB::table('tbl_category')->get();
        $banner = DB::table('tbl_category')->get();
        
        $firstSlide = DB::table('tbl_image')->where('situation',1)->where('status',1)->first();
        $secondSlide = DB::table('tbl_image')->where('situation',2)->where('status',1)->first();
        $thirdSlide = DB::table('tbl_image')->where('situation',3)->where('status',1)->first();

       return view('front_end.hospital.test',['categories'=>$categories,'Doctorcategory'=>$Doctorcategory,'firstSlide'=>$firstSlide,
       'secondSlide'=>$secondSlide,'thirdSlide'=>$thirdSlide, 'banner'=>$banner]);
    }

   
    public function hospital_create()
    {
        $banner = DB::table('tbl_category')->get();
        
        $firstSlide = DB::table('tbl_image')->where('situation',1)->where('status',1)->first();
        $secondSlide = DB::table('tbl_image')->where('situation',2)->where('status',1)->first();
        $thirdSlide = DB::table('tbl_image')->where('situation',3)->where('status',1)->first();

        return view('front_end.hospital.create', compact('firstSlide', 'secondSlide', 'thirdSlide', 'banner'));
    }

    
    
    public function hospital_store(Request $request)
    {
       $request->validate([

            'name' => 'required',
            'mobile' => 'required',
            'address' => 'required'

        ]);

      
       $data = array();
       $data['name']= $request->get('name');
       $data['mobile']= $request->get('mobile');
       $data['address'] = $request->get('address');

       $query_insert = DB::table('tbl_hospital')->insert($data);
       
       Toastr::success('Successully Add 🙂' ,'Success');
       return redirect()->route('hospital')->with('message','Registered succesfully');
       
    }

    public function add_doctor(){

        $firstSlide = DB::table('tbl_image')->where('situation',1)->where('status',1)->first();
        $secondSlide = DB::table('tbl_image')->where('situation',2)->where('status',1)->first();
        $thirdSlide = DB::table('tbl_image')->where('situation',3)->where('status',1)->first();
        $categories= DB::table('tbl_category')->get();
        $banner = DB::table('tbl_category')->get();

       
        return view('front_end.add_doc.create', compact('categories','firstSlide', 'secondSlide', 'thirdSlide', 'banner'));

    }

    public function doctor_store(Request $request){

    
       $data = array();
       $data['name']= $request->get('name');
       $data['category']= $request->get('category');
       $data['degree']= $request->get('degree');
       $data['designation']= $request->get('designation');
       $data['specialist']= $request->get('specialist');
       $data['reg_no']= $request->get('reg_no');
       $data['status']= 0;
//dd($request->chamber);
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

        return redirect()->route('index')->with('message','Registered succesfully');

    }

    // hospital----------------
    public function blood_group()
    {   
        $categories= DB::table('tbl_bloodgroup')->orderBy('id', 'DESC')->get();
        $Doctorcategory = DB::table('tbl_category')->get();
        $banner = DB::table('tbl_category')->get();
        
        $firstSlide = DB::table('tbl_image')->where('situation',1)->where('status',1)->first();
        $secondSlide = DB::table('tbl_image')->where('situation',2)->where('status',1)->first();
        $thirdSlide = DB::table('tbl_image')->where('situation',3)->where('status',1)->first();

       return view('front_end.blood.blood_group',['categories'=>$categories,'Doctorcategory'=>$Doctorcategory,'firstSlide'=>$firstSlide,
       'secondSlide'=>$secondSlide,'thirdSlide'=>$thirdSlide,
       'banner'=>$banner
       ]);
    }
    
    // Blood donate----------------------------------------------------------------
    public function blood_donate()
    {   
        $firstSlide = DB::table('tbl_image')->where('situation',1)->where('status',1)->first();
        $secondSlide = DB::table('tbl_image')->where('situation',2)->where('status',1)->first();
        $thirdSlide = DB::table('tbl_image')->where('situation',3)->where('status',1)->first();
        $banner = DB::table('tbl_category')->get();

        $categories= DB::table('tbl_blooddonor')->orderBy('id', 'DESC')->get();
        $blood_group = DB::table('tbl_bloodgroup')->get();

       return view('front_end.blood_donor.index',['categories'=>$categories, 'blood_group'=> $blood_group,
       'firstSlide'=> $firstSlide,
       'secondSlide'=> $secondSlide,
       'thirdSlide'=> $thirdSlide,
       'banner'=>$banner
       ]);
    }

   
    public function blood_donate_create()
    {
        $firstSlide = DB::table('tbl_image')->where('situation',1)->where('status',1)->first();
        $secondSlide = DB::table('tbl_image')->where('situation',2)->where('status',1)->first();
        $thirdSlide = DB::table('tbl_image')->where('situation',3)->where('status',1)->first();
        $banner = DB::table('tbl_category')->get();

        $categories= DB::table('tbl_blooddonor')->orderBy('id', 'DESC')->get();
        $blood_group = DB::table('tbl_bloodgroup')->get();

        return view('front_end.blood_donor.create', ['categories'=>$categories, 'blood_group'=> $blood_group,
        'firstSlide'=> $firstSlide,
       'secondSlide'=> $secondSlide,
       'thirdSlide'=> $thirdSlide,
       'banner'=>$banner
       ]);

    }

    
    
    public function blood_donate_store(Request $request)
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
       return redirect()->route('index')->with('message','Registered succesfully');
       
    }

    public function groupwise_blood_donate($id){
        
        $firstSlide = DB::table('tbl_image')->where('situation',1)->where('status',1)->first();
        $secondSlide = DB::table('tbl_image')->where('situation',2)->where('status',1)->first();
        $thirdSlide = DB::table('tbl_image')->where('situation',3)->where('status',1)->first();

        $categories= DB::table('tbl_blooddonor')->where('blood_group', $id)->orderBy('id', 'DESC')->get();
        $blood_group = DB::table('tbl_bloodgroup')->get();
        $banner = DB::table('tbl_category')->get();

       return view('front_end.blood_donor.index',['categories'=>$categories, 'blood_group'=> $blood_group,
       'firstSlide'=> $firstSlide,
       'secondSlide'=> $secondSlide,
       'thirdSlide'=> $thirdSlide,
       'banner'=>$banner
       ]);

    }




    public function contact(){

        $firstSlide = DB::table('tbl_image')->where('situation',1)->where('status',1)->first();
        $secondSlide = DB::table('tbl_image')->where('situation',2)->where('status',1)->first();
        $thirdSlide = DB::table('tbl_image')->where('situation',3)->where('status',1)->first();
        $banner = DB::table('tbl_category')->get();

        return view('front_end.contact',['firstSlide'=> $firstSlide,
       'secondSlide'=> $secondSlide,
       'thirdSlide'=> $thirdSlide,
       'banner'=> $banner
       ]);
    }



   
}
