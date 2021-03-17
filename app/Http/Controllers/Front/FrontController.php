<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;


class FrontController extends Controller
{
    public function front(){
        return view('front_end.index');
    }


    public function banner(){

        $banner = DB::table('tbl_image')->get();

        return view('front_end.index', ['banner'=>$banner]);

    }
}
