<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\Admin\RemoveSoldPropertyController;
use Illuminate\Support\Facades\Log;

class RemoveExpireProperty extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'removeExpireProperty';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove Expire Property';

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
        Log::info("Cron is working fine no 2!");
        $controller = new RemoveSoldPropertyController();
        $controller->removeSoldProperty();
    }
}
