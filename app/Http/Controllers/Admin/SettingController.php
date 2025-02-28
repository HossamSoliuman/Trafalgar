<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;


class SettingController extends Controller
{
    
    
    
    
  public function index(){
      $setting = Setting::find(1);
      return view('admin.pages.setting',compact('setting'));
  }
  
  public function update(Request $request){
   
    
    //   $id = Auth::user()->id;
         $request->validate([
            'facebookLink' => 'required|url',
           'youtubeLink' => 'required|url',
             'instagramLink' => 'required|url',
           'twitterLink' => 'required|url',
            'linkedinIn' => 'required|url',
             'contactNo' => 'required',
            'emailAddress' => 'required|email',
             'logo_image' => 'sometimes|mimes:jpeg,jpg,bmp,png',
        ]);
        
     
    
        
        $setting = Setting::find($request->setting_id);
       if($request->hasFile('logo_image')){
            
            $name = $request->file('logo_image')->getClientOriginalName();
            $path = $request->file('logo_image')->store('public/logo_image');
            $path = str_replace("public/logo_image/","",$path);
            $setting->logo_image = $path;
        }
        
        if($request->hasFile('banner_image')){
            
            $name = $request->file('banner_image')->getClientOriginalName();
            $path = $request->file('banner_image')->store('public/banner_image');
            $path = str_replace("public/banner_image/","",$path);
            $setting->banner_image = $path;
        }
        
        
        if($request->hasFile('calendly_icon')){
            
            $name = $request->file('calendly_icon')->getClientOriginalName();
            $path = $request->file('calendly_icon')->store('public/banner_image');
            $path = str_replace("public/banner_image/","",$path);
            $setting->calendly_icon = $path;
        }
        
        
        
        if($request->display_banner == "on"){
            $display_banner = 1;
        }else{
            $display_banner = 0;
        }
        
        
        $setting->facebook_link = $request->facebookLink;
        $setting->youtube_link = $request->youtubeLink;
        $setting->instagram_link = $request->instagramLink;
        $setting->twitter_link = $request->twitterLink;
        $setting->linkedin_link = $request->linkedinIn;
         $setting->website_contact_no = $request->contactNo;
        $setting->website_email = $request->emailAddress;
         $setting->banner_link = $request->bannerLink;
           $setting->calendly_link = $request->calendly_link;
           $setting->display_banner = $display_banner;
       
							
        $setting->save();
       
            
        return redirect('/admin/setting')->with('success', 'Setting save successfully');
  }
}
