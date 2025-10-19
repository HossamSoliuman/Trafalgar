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
        try {
            $controller = new ImportPropertyController();
            Log::info('Starting Durban import');
            $controller->durban();
            Log::info('Durban import completed successfully');

            Log::info('Starting Cape Town import');
            $controller->capeTown();
            Log::info('Cape Town import completed successfully');

            Log::info('Starting East London import');
            $controller->eastLondon();
            Log::info('East London import completed successfully');

            Log::info('Starting Inner City import');
            $controller->innerCity();
            Log::info('Inner City import completed successfully');

            Log::info('Starting Johannesburg import');
            $controller->johannesBurg();
            Log::info('Johannesburg import completed successfully');

            Log::info('Starting Port Elizabeth import');
            $controller->portElizabeth();
            Log::info('Port Elizabeth import completed successfully');

            Log::info('Starting Pretoria import');
            $controller->pretoria();
            Log::info('Pretoria import completed successfully');

            $SyncController = new SyncApiPropertyImportController();
            $SyncController->unibaseApiData();

            Log::info('Import properties cron finished successfully');
        } catch (Exception $e) {
            Log::error('Import properties cron failed: ' . $e->getMessage());
            Mail::raw('Error occurred in ImportProperties command: ' . $e->getMessage(), function ($message) {
                $message->to('hossamsoliuman@gmail.com')->subject('ImportProperties Cron Failed');
            });
        }
    }
}
