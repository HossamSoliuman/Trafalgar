<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Exports\WeeklyPropertyReportExport;
use App\Mail\WeeklyExcelPropertyReport;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class WeeklyPropertyReportController extends Controller
{
    public function export()
    {
        $filename = 'daily_property_report_' . now()->format('F_j_Y') . '.xlsx';
        $stored = Excel::store(new WeeklyPropertyReportExport, $filename, 'excelsheet_path');

        if (!$stored) {
            Log::error('Excel file failed to store.');
            return response()->json(['error' => 'Failed to generate report'], 500);
        }

        Log::info('Excel report stored successfully: ' . $filename);
        $fileUrl = storage_path('app/dailyreport/' . $filename);
        $to = [
            'jeanne@memeworx.co.za',
            'umayyas@trafalgar.co.za',
            'hossamsoliuman@gmail.com'
        ];
        //
        $cc = [];
        Mail::to($to)
            ->cc($cc)
            ->send(new WeeklyExcelPropertyReport($fileUrl));

        return response()->json(['message' => 'Report generated and email sent.']);
    }
}
