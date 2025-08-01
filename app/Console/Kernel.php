<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Jobs\SendPendingContactEmails;

class Kernel extends ConsoleKernel
{

    protected $commands = [
        Commands\RemoveExpireProperty::class,
        Commands\WeekPropertyEmailReport::class,
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
        $schedule->command('WeekPropertyEmailReport:cron')->dailyAt('08:00');
        $schedule->job(new SendPendingContactEmails)->cron('*/21 * * * *');
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
