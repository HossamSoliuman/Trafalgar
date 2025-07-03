<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Excel;
use App\Exports\WeeklyPropertyReportExport;
use Mail;
use App\Mail\WeeklyExcelPropertyReport;

class WeeklyPropertyReportController extends Controller
{
    public function export()
    {
          Mail::raw('This is a simple email without mailable.', function ($message) {
            $message->to('hossamsoliuman@gmail.com')->subject('Simple Email');
        });
        return;
        $path =  'weekly_property_report' . strtotime("now") . '.xlsx';
        $excel =  Excel::store(new WeeklyPropertyReportExport, 'weekly_property_report' . strtotime("now") . '.xlsx', 'excelsheet_path');

        // $realPath =   asset('storage/weeklyreport/' . $path);
        $realPath = storage_path('app/public/weeklyreport/' . $path);

        // $arrayEmail = ['andrews@trafalgar.co.za', 'davided@trafalgar.co.za', 'janines@trafalgar.co.za', 'umayyas@trafalgar.co.za', 'trafalgarpm@gmail.com', 'jeanne@memeworx.co.za'];
        $arrayEmail = ['hossamsoliuman@gmail.com'];

        for ($r = 0; $r < count($arrayEmail); $r++) {
            Mail::to($arrayEmail[$r])->send(new WeeklyExcelPropertyReport($realPath));
        }
    }
}
