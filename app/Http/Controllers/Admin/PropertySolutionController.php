<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PropertySolution;
use Redirect;


class PropertySolutionController extends Controller
{
   
    public function index()
    {
         $propertySolutions = PropertySolution::paginate(5);
        return view('admin.pages.propertysolution.propertySolutionList',['propertySolutions' =>$propertySolutions]);

    }

    
    public function create()
    {
         return view('admin.pages.propertysolution.addPropertySolution');
    }

    
    public function store(Request $request)
    {
        
         $request->validate([
            'title' => 'required',
           'description' => 'required',
             'propertySolutionImage' => 'required|mimes:jpeg,jpg,bmp,png,webp',
        ]);
        
        
        $PropertySolution = new PropertySolution;
        
        if($request->hasFile('propertySolutionImage')){
            
            $name = $request->file('propertySolutionImage')->getClientOriginalName();
            $path = $request->file('propertySolutionImage')->store('public/property_soultion');
            $path = str_replace("public/property_soultion/","",$path);
          
             $PropertySolution->image_link = $path;
        }
        
        
        $PropertySolution->title_name = $request->title;
        $PropertySolution->description = $request->description;
      
       // $PropertySolution->url_link = $request->url_link;
        $PropertySolution->visible_status =$request->displayStatus;
        $PropertySolution->save();
         return Redirect::back()->with('success', 'Property solution save successfully');
      // return redirect('/admin/propertysolution/create')->with('success', 'Property solution save successfully');
    }

    
    public function show($id)
    {
       
    }

   
    public function edit($id)
    {
    
       $propertySolution = PropertySolution::find($id);
       return view('admin.pages.propertysolution.editPropertySolution',compact('propertySolution'));
    }

    public function update(Request $request, $id)
    {
      
       
       $request->validate([
            'title' => 'required',
           'description' => 'required',
             'propertySolutionImage' => 'sometimes|mimes:jpeg,jpg,bmp,png,webp',
        ]);
        
        
        //$PropertySolution = new PropertySolution;
        $PropertySolution = PropertySolution::find($id);
        
        if($request->hasFile('propertySolutionImage')){
            
            $name = $request->file('propertySolutionImage')->getClientOriginalName();
            $path = $request->file('propertySolutionImage')->store('public/property_soultion');
            $path = str_replace("public/property_soultion/","",$path);
          
             $PropertySolution->image_link = $path;
        }
        
        
        $PropertySolution->title_name = $request->title;
        $PropertySolution->description = $request->description;
      
       // $PropertySolution->url_link = $request->url_link;
        $PropertySolution->visible_status =$request->displayStatus;
        $PropertySolution->save();
        $path = route('admin.propertysolution.edit',$id);
       //return redirect($path)->with('success', 'Property solution update successfully');
       return Redirect::back()->with('success', 'Property solution update successfully');
    }

   
    public function destroy($id)
    {
       $propertySolution = PropertySolution::find($id);
        $propertySolution->delete();
          return redirect('/admin/propertysolution')->with('success', 'Property solution delete successfully');
    }
    
    
      public function display($id)
    {
    
       $propertySolution = PropertySolution::find($id);
       $propertySolution->visible_status = 1;
       $propertySolution->save();
       // return redirect('/admin/propertysolution')->with('success', 'Property solution update successfully');
        return Redirect::back()->with('success', 'Property solution update successfully');
    }
    
    
      public function notDisplay($id)
    {
         $propertySolution = PropertySolution::find($id);
       $propertySolution->visible_status = 0;
       $propertySolution->save();
       // return redirect('/admin/propertysolution')->with('success', 'Property solution update successfully');
         return Redirect::back()->with('success', 'Property solution update successfully');
    }
}
