<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Excel;
use App\Exports\WeeklyPropertyReportExport;

class DownloadPropertySheetController extends Controller
{
    
    
    public function index() 
    {
      
         return view('admin.pages.downloadPropertyReportSheet');
    }
    
   public function downloadPropertyReport() 
    {
       $path =  'property_report'.uniqid().'.xlsx';
       return Excel::download(new WeeklyPropertyReportExport, $path);
       
           
    }
}
