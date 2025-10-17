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
        \Log::info("Email cron start working");
        $controller = new WeeklyPropertyReportController();
        $controller->export();
        \Log::info("Email cron finished successfully");

    }
}
