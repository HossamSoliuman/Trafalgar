<?php

namespace App\Console;

use App\Console\Commands\ImportAgents;
use App\Console\Commands\ImportProperties;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Jobs\SendPendingContactEmails;

class Kernel extends ConsoleKernel
{

    protected $commands = [
        Commands\RemoveExpireProperty::class,
        Commands\WeekPropertyEmailReport::class,
        ImportProperties::class,
        ImportAgents::class,
    ];
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->job(new SendPendingContactEmails)->everyMinute();
        $schedule->command('WeekPropertyEmailReport:cron')->everyMinute();
        $schedule->command('importProperties')->cron('0 1,5,13 * * *');
        $schedule->command('importAgents')->cron('0 1,5,13 * * *');
        $schedule->command('removeExpireProperty')->dailyAt('1:00');
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
