<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Redirect;

class CustomPageController extends Controller
{
    
    public function index(){
        $pages = Page::paginate(4);
        return view('admin.pages.customPages.pageList',compact('pages'));
    }
    public function create(){
        
        return view('admin.pages.customPages.addCustomPage');
    }
    
    
    public function store(Request $request){
        
           $request->validate([
            'page_title' => ['required', 'string', 'max:255', 'unique:pages,page_name'],
           'description' => 'required',
             'page_url_name' => ['required','unique:pages,page_url_name'],
           'featured_image' => 'required',
             
        ],[   
        'page_title.string'    => 'only alphabet value is required'
    ]);
        
        
        $page = new Page;
        $page->page_name = $request->page_title;
         $page->page_status = $request->page_status;
          $page->description = $request->description;
           //$page->page_feature_image = $request->featured_image;
           $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($request->page_title)));
           
            $page->page_url_name = $slug;
             $page->page_route_url = $slug;
            
             if($request->hasFile('featured_image')){
            
            $name = $request->file('featured_image')->getClientOriginalName();
            $path = $request->file('featured_image')->store('public/featured_image');
            $path = str_replace("public/featured_image/","",$path);
          
             $page->page_feature_image = $path;
        }
            $page->save();
            return Redirect::back()->with('success','page create Successfully');
       
    }
    
    
       public function display($id)
    {
    
       $page = Page::find($id);
       $page->page_status = 1;
       $page->save();
        return Redirect::back()->with('success', 'Page status update successfully');
       
    }
    
    
      public function notDisplay($id)
    {
         $page = Page::find($id);
       $page->page_status = 0;
       $page->save();
         return Redirect::back()->with('success', 'Page status update successfully');
    }
    
       public function edit($id)
    {
       // dd($id);
         $page = Page::find($id);
         return view('admin.pages.customPages.editCustomPage',compact('page'));
   
    }
    
       public function update(Request $request,$id)
    {
        // dd($id);
       $request->validate([
            'page_title' => ['required', 'string', 'max:255', 'unique:pages,page_name,'.$id],
           'description' => 'required',
             'page_url_name' => ['required','unique:pages,page_url_name,'.$id],
           'featured_image' => 'sometimes|required',
             
        ],[   
        'page_title.string'    => 'only alphabet value is required'
    ]);
        
        
        $page =  Page::find($id);
        $page->page_name = $request->page_title;
         $page->page_status = $request->page_status;
          $page->description = $request->description;
           //$page->page_feature_image = $request->featured_image;
           $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($request->page_title)));
           
            $page->page_url_name = $slug;
             $page->page_route_url = $slug;
            
             if($request->hasFile('featured_image')){
            
            $name = $request->file('featured_image')->getClientOriginalName();
            $path = $request->file('featured_image')->store('public/featured_image');
            $path = str_replace("public/featured_image/","",$path);
          
             $page->page_feature_image = $path;
        }
            $page->save();
            return Redirect::back()->with('success','page create Successfully');
   
    }
    
    
}
