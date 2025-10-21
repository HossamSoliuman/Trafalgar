<?php

namespace App\Console\Commands;

use App\Http\Controllers\Admin\ImportPropertyController;
use App\Http\Controllers\Admin\SyncApiPropertyImportController;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ImportProperties extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'importProperties';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import Properties';

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
        Log::info('Import properties cron started');
        $controller = new ImportPropertyController();
        $syncController = new SyncApiPropertyImportController();

        $cities = [
            'durban',
            'capeTown',
            'eastLondon',
            'johannesBurg',
            'portElizabeth',
            'pretoria'
        ];

        foreach ($cities as $city) {
            try {
                Log::info("Starting {$city} properties import");
                $controller->$city();
                Log::info("{$city} properties import completed successfully");
            } catch (Exception $e) {
                Log::error("Error importing properties for {$city}: " . $e->getMessage());
                Mail::raw("Error importing properties for {$city}: " . $e->getMessage(), function ($message) use ($city) {
                    $message->to('hossamsoliuman@gmail.com')->subject("ImportProperties Cron Failed - {$city}");
                });
            }
        }

        try {
            Log::info('Starting Unibase property API sync');
            $syncController->unibaseApiData();
            Log::info('Unibase property API sync completed successfully');
        } catch (Exception $e) {
            Log::error('Error during Unibase property API sync: ' . $e->getMessage());
            Mail::raw('Error during Unibase property API sync: ' . $e->getMessage(), function ($message) {
                $message->to('hossamsoliuman@gmail.com')->subject('ImportProperties Cron Failed - Unibase Sync');
            });
        }

        Log::info('Import properties cron finished');
    }
}
