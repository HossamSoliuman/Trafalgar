<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Excel;
use App\Exports\WeeklyPropertyReportExport;
use Mail;
use App\Mail\WeeklyExcelPropertyReport;

// class WeeklyPropertyReportController extends Controller
// {
//     public function export()
//     {
//         try {
//             $timestamp = time();
//             $filename = 'weekly_property_report' . $timestamp . '.xlsx';

//             // Attempt to store the Excel file
//             $stored = Excel::store(new WeeklyPropertyReportExport, $filename, 'excelsheet_path');

//             if (!$stored) {
//                 \Log::error('Excel file failed to store.');
//                 return response()->json(['error' => 'Failed to generate report'], 500);
//             }

//             \Log::info('Excel report stored successfully: ' . $filename);

//             // Attempt to send a raw test email
//             // try {
//             //     $to = 'capig61879@bulmp3.com';
//             //     $subject = 'Raw Email Example';
//             //     $body = "Hello,\n\nThis is a raw plain-text email sent from Laravel.";

//             //     Mail::raw($body, function ($message) use ($to, $subject) {
//             //         $message->to($to)->subject($subject);
//             //     });

//             //     \Log::info('Raw email sent to: ' . $to);
//             // } catch (\Exception $e) {
//             //     \Log::error('Failed to send raw email: ' . $e->getMessage());
//             // }

//             // Generate the URL to the file
//             $fileUrl = asset('storage/weeklyreport/' . $filename);
//             // dd($fileUrl);
//             $recipients = [
//                 'andrews@trafalgar.co.za',
//                 'davided@trafalgar.co.za',
//                 'janines@trafalgar.co.za',
//                 'umayyas@trafalgar.co.za',
//                 'trafalgarpm@gmail.com',
//                 'jeanne@memeworx.co.za',
//                 'hossamsoliuman@gmail.com',
//                 'fawadalikhan1896@gmail.com'
//             ];


//             // foreach ($recipients as $email) {
//                         // $to = 'andrews@trafalgar.co.za'; // Primary recipient (can be a generic one)
//                     $to = 'fawadalikahn1896@gmail.com'; // Primary recipientfawadalikahn1896@gmail.com
//                 try {
//                     Mail::to($to)->bcc($recipients)->send(new WeeklyExcelPropertyReport($fileUrl));
//                     \Log::info("Report email sent to: $to");
//                 } catch (\Exception $e) {
//                     \Log::error("Failed to send report to $to: " . $e->getMessage());
//                 }
//             // }

//             return response()->json(['message' => 'Report generated and emails attempted.']);
//         } catch (\Exception $e) {
//             \Log::error('Export process failed: ' . $e->getMessage());
//             return response()->json(['error' => 'Something went wrong during export.'], 500);
//         }
//     }
// }

class WeeklyPropertyReportController extends Controller
{
    public function export()
    {
        try {
            $timestamp = time();
            $filename = 'weekly_property_report' . $timestamp . '.xlsx';

            // Store the Excel file
            $stored = Excel::store(new WeeklyPropertyReportExport, $filename, 'excelsheet_path');

            if (!$stored) {
                \Log::error('Excel file failed to store.');
                return response()->json(['error' => 'Failed to generate report'], 500);
            }

            \Log::info('Excel report stored successfully: ' . $filename);

            // Generate the URL to the file
            $fileUrl = asset('storage/weeklyreport/' . $filename);

            // Email recipients
            $to = [
                'jeanne@memeworx.co.za',
                'umayyas@trafalgar.co.za',
                'hossamsoliuman@gmail.com'
                ];
            $cc = [];

            // Send one email with BCC to others
            Mail::to($to)
                ->cc($cc)
                ->send(new WeeklyExcelPropertyReport($fileUrl));

            // \Log::info("Weekly report email sent to: $to with BCC to others.");

            return response()->json(['message' => 'Report generated and email sent.']);
        } catch (\Exception $e) {
            \Log::error('Export process failed: ' . $e->getMessage());
            return response()->json(['error' => 'Something went wrong during export.'], 500);
        }
    }
}
