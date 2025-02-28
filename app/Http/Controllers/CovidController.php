<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Mail\CovidMail;
use Mail;
use Redirect;

class CovidController extends Controller
{
    public function covid(){
        $setting = Setting::find(1);
         return view('frontPart.covid',compact('setting'));
   }
   
   public function covidform(Request $request){
        Mail::to('webmaster@trafalgar.co.za')->send(new CovidMail($request->all()));
 
        if (Mail::failures()) {
            return Redirect::back()->with('error', 'Something went wrong!');
        }else{
          return Redirect::back()->with('success', 'Email sent successfully');
        }
   
   }
}
