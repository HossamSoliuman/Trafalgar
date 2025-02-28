<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsLetterSignUp; 
use App\Models\Setting;
use App\Mail\NewsLetterSubscriberMail;
use Redirect;
use Mail;


class NewsLetterSubscriberController extends Controller
{
   public function subscriberdNewLetter(Request $request){
    //   dd($request->all());
       
    $newsLetterSignUp = new NewsLetterSignUp;
    $newsLetterSignUp->user_name = $request->letter_name;
     $newsLetterSignUp->user_email = $request->letter_email;
     $newsLetterSignUp->save();
 //webmaster@trafalgar.co.za
          Mail::to('webmaster@trafalgar.co.za')->send(new NewsLetterSubscriberMail($request));
 
        if (Mail::failures()) {
            return Redirect::back()->with('error', 'Something went wrong!');
        }else{
          return Redirect::back()->with('success', 'News letter subscribed successfully');
        }
        
    //   return Redirect::back()->with('success', 'News letter subscribed successfully');
   }
   
     public function index(){
        $setting = Setting::find(1);
        return view('frontPart.newLetterForm',compact('setting'));
    }
}
