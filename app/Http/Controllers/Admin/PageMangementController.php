<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomPage;
class PageMangementController extends Controller
{
    public function index(){
        //   echo request()->segment(3);
        $pageData =   CustomPage::where('page_name',request()->segment(3))->first();
          return view('admin.pages.pageContent',compact('pageData'));
        
    }
    
    public function update(Request $request ,$id){
        
         $request->validate([
         
           'description' => 'required',
          //   'newsFeatureImage' => 'sometimes|mimes:jpeg,jpg,bmp,png',
            
        ]);
        
         $customPage =   CustomPage::find($id);
         $customPage->page_content = $request->description;
         $customPage->save();
         
          return redirect('/admin/pagemanagement/'.$customPage->page_name)->with('success', 'Page update successfully');
    }
}
