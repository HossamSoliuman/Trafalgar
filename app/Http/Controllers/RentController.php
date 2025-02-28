<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class RentController extends Controller
{
    public function index(){
        $setting = Setting::find(1);
        return view('frontPart.rentPages.rent',compact('setting'));
    }
    
    public function rentalServices(){
        $setting = Setting::find(1);
        return view('frontPart.rentPages.rentalServices',compact('setting'));
    }
    
     public function tenantServices(){
        $setting = Setting::find(1);
        return view('frontPart.rentPages.tenantServices',compact('setting'));
    }
    
     public function vacancyMarketing(){
        $setting = Setting::find(1);
        return view('frontPart.rentPages.vacancyMarketing',compact('setting'));
    }
    
     public function tenantScreening(){
        $setting = Setting::find(1);
        return view('frontPart.rentPages.tenantScreening',compact('setting'));
    }
    
     public function tenantGuide(){
        $setting = Setting::find(1);
        return view('frontPart.rentPages.tenantGuide',compact('setting'));
    }
    
      public function rentalReports(){
        $setting = Setting::find(1);
        return view('frontPart.rentPages.rentalReports',compact('setting'));
    }
    
     public function faqs(){
        $setting = Setting::find(1);
        return view('frontPart.rentPages.rentFaqs',compact('setting'));
    }
    
     
    
    
    
}
