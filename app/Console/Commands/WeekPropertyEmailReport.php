<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\Admin\WeeklyPropertyReportController;
use Excel;
use App\Exports\WeeklyPropertyReportExport;
use Mail;
use App\Mail\WeeklyExcelPropertyReport;

class WeekPropertyEmailReport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'WeekPropertyEmailReport:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
    //       $path =  'weekly_property_report'.strtotime("now").'.xlsx';
    //     $excel =  Excel::store(new WeeklyPropertyReportExport, 'weekly_property_report'.strtotime("now").'.xlsx','excelsheet_path');
    //      $realPath =   asset('storage/weeklyreport/'.$path) ;
    //   //$realPath = "https://webplan.live/storage/weeklyreport/weekly_property_report1652175541.xlsx";
    //   Mail::to('arunsain.weblance@gmail.com')->send(new WeeklyExcelPropertyReport($realPath));
 
    //     if (Mail::failures()) {
    //       \Log::info("Something went wrong");
    //     }else{
        
    //     }
        \Log::info("Email cron start working");
      $controller = new WeeklyPropertyReportController(); // make sure to import the controller
 $controller->export();
   \Log::info("Email sent successfully");
       
    }
}
