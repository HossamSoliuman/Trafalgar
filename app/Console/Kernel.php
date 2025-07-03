<?php

namespace App\Console;

use App\Console\Commands\WeekPropertyEmailReport;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Jobs\SendPendingContactEmails;
use App\Jobs\SendReportEmail;

class Kernel extends ConsoleKernel
{

    protected $commands = [
        Commands\RemoveExpireProperty::class,
        WeekPropertyEmailReport::class,
    ];
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('removeExpireProperty:cron')->daily();
        $schedule->job(new SendPendingContactEmails)->cron('*/21 * * * *');
        $schedule->job(new SendReportEmail)->cron('* * * * *');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
