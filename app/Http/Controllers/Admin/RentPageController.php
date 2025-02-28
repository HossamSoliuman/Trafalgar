<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\CustomPage;
use Redirect;

class RentPageController extends Controller
{
    public function index(){
           $rentPages = CustomPage::where('parent_page_name','rent')->paginate(20);
      return view('admin.pages.rent.rentPageList',compact('rentPages'));
    }
    
    public function editRentPage(Request $request){
           $rentPage = CustomPage::where('id',$request->id)->first();
      return view('admin.pages.rent.editRentPageData',compact('rentPage'));
    }
    
      public function update(Request $request ,$id){
        
         $request->validate([
          'page_name' => 'required',
          'description' => 'required',
            'featured_image' => 'sometimes|mimes:jpeg,jpg,bmp,png,gif',
            
        ]);
        
         $customPage =   CustomPage::find($id);
         
          $customPage->page_name = $request->page_name;
         $customPage->page_content = $request->description;
         
          if($request->hasFile('featured_image')){
            
            $name = $request->file('featured_image')->getClientOriginalName();
            $path = $request->file('featured_image')->store('public/page_featured_image');
            $path = str_replace("public/page_featured_image/","",$path);
          
             $customPage->page_featured_image = $path;
        }
        
         $customPage->save();
         return Redirect::back()->with('success', 'Page update successfully');
       
    }
}
