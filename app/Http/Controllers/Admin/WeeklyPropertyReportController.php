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
        $start = now();
        $startMicro = microtime(true);

        Log::info(str_repeat('/', 120));
        Log::info('WeeklyPropertyReport Export Started');
        Log::info("Application: " . config('app.name'));
        Log::info("Environment: " . config('app.env'));
        Log::info("Started At: " . $start->toDateTimeString());
        Log::info("Running Via: " . php_sapi_name());

        $filename = 'daily_property_report_' . now()->format('F_j_Y') . '.xlsx';
        $stored = Excel::store(new WeeklyPropertyReportExport, $filename, 'excelsheet_path');

        if (!$stored) {
            Log::error(str_repeat('!', 120));
            Log::error("Excel File Failed to Store");
            Log::error("Filename: {$filename}");
            Log::error("Path: " . storage_path('app/dailyreport/' . $filename));
            Log::error("Time: " . now()->toDateTimeString());
            Log::error(str_repeat('!', 120));
            return response()->json(['error' => 'Failed to generate report'], 500);
        }

        $filePath = storage_path('app/dailyreport/' . $filename);

        Log::info(str_repeat('-', 120));
        Log::info('Excel Report Stored Successfully');
        Log::info("Filename: {$filename}");
        Log::info("File Path: {$filePath}");
        Log::info("Time: " . now()->toDateTimeString());

        $to = [
            'AndrewS@trafalgar.co.za',
            'jeanne@memeworx.co.za',
            'umayyas@trafalgar.co.za',
            // 'hossamsoliuman@gmail.com'
        ];
        $cc = [];

        Log::info(str_repeat('-', 120));
        Log::info('Preparing to Send Weekly Report Email');
        Log::info("To: " . implode(', ', $to));
        Log::info("CC: " . implode(', ', $cc));
        Log::info("Mailer: " . config('mail.default'));
        Log::info("Mail Host: " . config('mail.mailers.' . config('mail.default') . '.host'));
        Log::info("Mail Port: " . config('mail.mailers.' . config('mail.default') . '.port'));
        Log::info("From: " . config('mail.from.address'));
        Log::info("Time: " . now()->toDateTimeString());

        try {
            Mail::to($to)
                ->cc($cc)
                ->send(new WeeklyExcelPropertyReport($filePath));

            $failures = Mail::failures();

            if (!empty($failures)) {
                Log::error(str_repeat('!', 120));
                Log::error("Mail Reported Failures");
                Log::error(json_encode($failures, JSON_PRETTY_PRINT));
                Log::error("Time: " . now()->toDateTimeString());
                Log::error(str_repeat('!', 120));
            } else {
                Log::info(str_repeat('-', 120));
                Log::info("Email Sent Successfully (No Failures Reported)");
                Log::info("To: " . implode(', ', $to));
                Log::info("CC: " . implode(', ', $cc));
                Log::info("Time: " . now()->toDateTimeString());
            }
        } catch (\Throwable $e) {
            Log::error(str_repeat('!', 120));
            Log::error("Exception While Sending Email");
            Log::error("Exception: " . get_class($e));
            Log::error("Message: " . $e->getMessage());
            Log::error("Trace:\n" . $e->getTraceAsString());
            Log::error("Time: " . now()->toDateTimeString());
            Log::error(str_repeat('!', 120));
            return response()->json(['error' => 'Failed to send email', 'detail' => $e->getMessage()], 500);
        }

        $endMicro = microtime(true);
        $duration = round($endMicro - $startMicro, 3);

        Log::info(str_repeat('-', 120));
        Log::info('WeeklyPropertyReport Export Finished');
        Log::info("Started At: " . $start->toDateTimeString());
        Log::info("Finished At: " . now()->toDateTimeString());
        Log::info("Duration (seconds): {$duration}");
        Log::info(str_repeat('=', 120));

        return response()->json(['message' => 'Report generated and email sent.']);
    }
}
