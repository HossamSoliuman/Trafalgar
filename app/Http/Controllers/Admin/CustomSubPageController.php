<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubPage;
use App\Models\Page;
use Redirect;

class CustomSubPageController extends Controller
{
    public function index(Request $request){
      //dd($request->id);
     $page =  Page::find($request->id);
         return view('admin.pages.customPages.addCustomSubPage',compact('page'));
    }
    
    public function store(Request $request){
    
        $request->validate([
            'page_title' => ['required', 'string', 'max:255', 'unique:sub_pages,subpage_name'],
           'description' => 'required',
             'page_url_name' => ['required','unique:sub_pages,subpage_route_url'],
           'featured_image' => 'required',
             
        ],[   
        'page_title.string'    => 'only alphabet value is required'
    ]);
       
        
        $page = new SubPage;
        $page->page_id = $request->page_id;
        $page->subpage_name = $request->page_title;
         $page->subpage_status = $request->page_status;
          $page->subpage_description = $request->description;
           //$page->page_feature_image = $request->featured_image;
           $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($request->page_title)));
           
            //$page->page_url_name = $slug;
             $page->subpage_route_url = $slug;
            
             if($request->hasFile('featured_image')){
            
            $name = $request->file('featured_image')->getClientOriginalName();
            $path = $request->file('featured_image')->store('public/featured_image');
            $path = str_replace("public/featured_image/","",$path);
          
             $page->subpage_feature_image = $path;
        }
            $page->save();
            return Redirect::back()->with('success','page create Successfully');
    }
    
     public function allSubPages(Request $request){
      //dd($request->id);
   $subPages =    SubPage::where('page_id',$request->id)->paginate(3);
  // dd($subPage);
        return view('admin.pages.customPages.subPageList',compact('subPages'));
    }
    
        public function display($id)
    {
    
       $page = SubPage::find($id);
       $page->subpage_status = 1;
       $page->save();
        return Redirect::back()->with('success', 'Sub Page status update successfully');
       
    }
    
    
      public function notDisplay($id)
    {
         $page = SubPage::find($id);
       $page->subpage_status = 0;
       $page->save();
         return Redirect::back()->with('success', 'Sub Page status update successfully');
    }
    
      public function destroy($id)
    {
         $page = SubPage::find($id);
        $page->delete();
           return Redirect::back()->with('success', 'Sub Page delete successfully');
    }
    
     public function edit($id){
      //dd($request->id);
     $page =  SubPage::find($id);
      $parentPages =  Page::where('page_status',1)->get();
     
         return view('admin.pages.customPages.editCustomSubPage',compact('page','parentPages'));
    }
    
    public function update(Request $request,$id){
    
      
        $request->validate([
            'page_title' => ['required', 'string', 'max:255', 'unique:sub_pages,subpage_name,'.$id],
           'description' => 'required',
             'page_url_name' => ['required','unique:sub_pages,subpage_route_url,'.$id],
           'featured_image' => 'required|sometimes',
           'page_id' => 'required',
             
        ],[   
        'page_title.string'    => 'only alphabet value is required',
        'page_id.required'    => 'parent page is required'
    ]);
       
        
        $page = SubPage::find($id);
       $page->page_id = $request->page_id;
        $page->subpage_name = $request->page_title;
         $page->subpage_status = $request->page_status;
          $page->subpage_description = $request->description;
           //$page->page_feature_image = $request->featured_image;
           $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($request->page_title)));
           
            //$page->page_url_name = $slug;
             $page->subpage_route_url = $slug;
            
             if($request->hasFile('featured_image')){
            
            $name = $request->file('featured_image')->getClientOriginalName();
            $path = $request->file('featured_image')->store('public/featured_image');
            $path = str_replace("public/featured_image/","",$path);
          
             $page->subpage_feature_image = $path;
        }
            $page->save();
            return Redirect::back()->with('success','page create Successfully');
    //  $page =  SubPage::find($id);
    //  dd($page);
    //      return view('admin.pages.customPages.addCustomSubPage',compact('page'));
    }
}
