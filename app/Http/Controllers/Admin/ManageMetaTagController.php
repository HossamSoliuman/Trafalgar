<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StaticPageMetaTag;
use Redirect;

class ManageMetaTagController extends Controller
{
     public function index()
    {
         $pageMetaTag = StaticPageMetaTag::paginate(15);
        return view('admin.pages.staticPageTag.staticPageMetaTagList',['pageMetaTags' =>$pageMetaTag]);

    }
    
    
      public function edit($id)
    {
    
       $pageMetaTag = StaticPageMetaTag::find($id);
       return view('admin.pages.staticPageTag.editStaticPageMetaTag',compact('pageMetaTag'));
    }

    public function update(Request $request, $id)
    {
   
       //dd($request->all());
       $request->validate([
            'page_title' => 'required',
           'page_keyword' => 'required',
             'page_description' => 'required',
        ]);
        
        
        //$PropertySolution = new PropertySolution;
        $PropertySolution = StaticPageMetaTag::find($id);
        
        
        
        
        $PropertySolution->page_title = $request->page_title;
        $PropertySolution->page_keyword = $request->page_keyword;
        $PropertySolution->page_description =$request->page_description;
        
        $PropertySolution->save();
        // $path = route('admin.propertysolution.edit',$id);
       //return redirect($path)->with('success', 'Property solution update successfully');
       return Redirect::back()->with('success', 'Meta tag update successfully');
    }

}
