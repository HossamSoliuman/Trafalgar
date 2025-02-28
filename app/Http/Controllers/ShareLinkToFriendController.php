<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ShareLinkToFriend;


class ShareLinkToFriendController extends Controller
{
    public function index(Request $request){
        $your_email =   $request->your_email;
        
      Mail::to($your_email)->send(new ShareLinkToFriend($request->all()));
 
      if (Mail::failures()) {
         
        return redirect(route('propertydetail',['propertid'=>$request->getId]))->with('error', 'Something went wrong!');
              
      }else{
          
        return redirect(route('propertydetail',['propertid'=>$request->getId]))->with('success', 'Email sent successfully.');

         }
    }
}
