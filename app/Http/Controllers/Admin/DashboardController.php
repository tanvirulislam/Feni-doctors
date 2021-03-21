<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use PDF;
use Brian2694\Toastr\Facades\Toastr;
use DB;

class DashboardController extends Controller
{
    public function index()
 {
    $ambulance= DB::table('tbl_ambulance')->count();
    $hospital= DB::table('tbl_hospital')->count();
    $blooddonor= DB::table('tbl_blooddonor')->count();
    $police= DB::table('tbl_police')->count();
    $fireservice= DB::table('tbl_fireservice')->count();
    $doctor= DB::table('tbl_doctor')->count();
      
        return view('admin.dashboard', compact('ambulance', 'hospital', 'blooddonor', 'police', 'fireservice', 'doctor'));
    
    }
}
