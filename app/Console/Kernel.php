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
        $schedule->job(new SendPendingContactEmails)->everyMinute();
        $schedule->command('WeekPropertyEmailReport:cron')->dailyAt('6:00');
        $schedule->command('importProperties')->twiceDaily(0, 12);
        $schedule->command('importAgents')->twiceDaily(0, 12);
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
