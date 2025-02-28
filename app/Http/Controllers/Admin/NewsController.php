<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewSection;

class NewsController extends Controller
{
   
    public function index()
    {
        $newLists =  NewSection::paginate(5);
         return view('admin.pages.newLists',compact('newLists'));
    }

   
    public function create()
    {
       return view('admin.pages.addNews');
    }

  
    public function store(Request $request)
    {
          $request->validate([
            'title' => 'required',
           'description' => 'required',
             'newsFeatureImage' => 'required|mimes:jpeg,jpg,bmp,png',
            
        ]);
        $newSection = new NewSection;
         if($request->hasFile('newsFeatureImage')){
            
            $name = $request->file('newsFeatureImage')->getClientOriginalName();
            $path = $request->file('newsFeatureImage')->store('public/news_feature_image');
            $path = str_replace("public/news_feature_image/","",$path);
          
             $newSection->news_featured_image = $path;
        }
        $newSection->news_title = $request->title;
        $newSection->news_description = $request->description;
        $newSection->news_title_slug = $this->slugify($request->title);
        $newSection->visible_status =$request->displayStatus;
        $newSection->save();
       return redirect('/admin/news/create')->with('success', 'News create successfully');
    }
    
    public function slugify( $text )
    {
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);  
        $text = trim($text, '-');
        $text = iconv('utf-8', 'ASCII//IGNORE//TRANSLIT', $text);   
        $text = strtolower(trim($text));
        $text = preg_replace('~[^-\w]+~', '', $text);
        return empty($text) ? substr( md5( time() ), 0, 8 ) : $text;
    }

  
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
         $singleNews = NewSection::find($id);
     
        return view('admin.pages.editNews',compact('singleNews'));
    }

    
    public function update(Request $request, $id)
    {
 $request->validate([
            'title' => 'required',
           'description' => 'required',
             'newsFeatureImage' => 'sometimes|mimes:jpeg,jpg,bmp,png',
            
        ]);
        $newSection = NewSection::find($id);
         if($request->hasFile('newsFeatureImage')){
            
            $name = $request->file('newsFeatureImage')->getClientOriginalName();
            $path = $request->file('newsFeatureImage')->store('public/news_feature_image');
            $path = str_replace("public/news_feature_image/","",$path);
          
             $newSection->news_featured_image = $path;
        }
        $newSection->news_title = $request->title;
        $newSection->news_description = $request->description;
        $newSection->news_title_slug = $this->slugify($request->title);
        $newSection->visible_status =$request->displayStatus;
        $newSection->save();
       $path =  route('admin.news.edit',$id);
       return redirect($path)->with('success', 'News create successfully');
    }

   
    public function destroy($id)
    {
       $newSection = NewSection::find($id);
        $newSection->delete();
          return redirect('/admin/news')->with('success', 'News delete successfully');
    }
    
    public function ckImageUpload(Request $request)
    {
        if($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();
       
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
       
            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();
       
            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;
       
            //Upload File
            $request->file('upload')->storeAs('public/uploadss', $filenametostore);
     
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/uploadss/'.$filenametostore); 
            $msg = 'Image successfully uploaded'; 
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
              
            // Render HTML output 
            @header('Content-type: text/html; charset=utf-8'); 
            echo $re;
        }
    }
    
       public function display($id)
    {
    
       $newSection = NewSection::find($id);
       $newSection->visible_status = 1;
       $newSection->save();
        return redirect('/admin/news')->with('success', 'News update successfully');
    }
    
    
      public function notDisplay($id)
    {
         $newSection = NewSection::find($id);
       $newSection->visible_status = 0;
       $newSection->save();
        return redirect('/admin/news')->with('success', 'News update successfully');
    }
}
