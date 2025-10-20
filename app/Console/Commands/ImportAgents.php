<?php

namespace App\Console\Commands;

use App\Http\Controllers\Admin\ImportAgentsController;
use App\Http\Controllers\Admin\SyncApiImportAgentsController;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Exception;

class ImportAgents extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'importAgents';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import Agents';

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
        Log::info('Import agents cron started');
        $controller = new ImportAgentsController();
        $controller2 = new SyncApiImportAgentsController();

        $cities = [
            'durban',
            'pretoria',
            'capeTown',
            'johannesBurg',
            'portElizabeth',
            'innerCity',
            'eastLondon'
        ];

        foreach ($cities as $city) {
            try {
                Log::info("Starting {$city} agents import");
                $controller->$city();
                Log::info("{$city} agents import completed successfully");
            } catch (\Exception $e) {
                Log::error("Error importing agents for {$city}: " . $e->getMessage());
                Mail::raw("Error importing agents for {$city}: " . $e->getMessage(), function ($message) use ($city) {
                    $message->to('hossamsoliuman@gmail.com')->subject("ImportAgents Cron Failed - {$city}");
                });
            }
        }

        try {
            Log::info('Starting Unibase agent API sync');
            $controller2->unibaseAgentApiData();
            Log::info('Unibase agent API sync completed successfully');
        } catch (\Exception $e) {
            Log::error('Error during Unibase agent API sync: ' . $e->getMessage());
            Mail::raw('Error during Unibase agent API sync: ' . $e->getMessage(), function ($message) {
                $message->to('hossamsoliuman@gmail.com')->subject('ImportAgents Cron Failed - Unibase Sync');
            });
        }

        Log::info('Import agents cron finished');
    }
}
