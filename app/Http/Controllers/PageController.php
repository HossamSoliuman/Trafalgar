<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\CustomPage;

class PageController extends Controller
{
    public function index(){
        
        $pageData =   CustomPage::where('page_name',request()->segment(1))->first();
        
        $setting = Setting::find(1);
        return view('frontPart/page',compact('setting','pageData'));
    }
    
}
