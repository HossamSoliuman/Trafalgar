<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EntegralApiData;
use App\Models\Job;


class SitemapController extends Controller
{
    public function index(){
        
        $jobs = Job::where('job_status',1)->get();
        
        $page = EntegralApiData::get();
        return response()->view('sitemap_xml',['page' => $page,'jobs' => $jobs])->header('Content-Type','text/xml');
    }
}
