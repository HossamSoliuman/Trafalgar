<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
// use App\Http\Controllers\Admin\RemoveSoldPropertyController;
use App\Http\Controllers\Admin\ImportAgentsController;
use App\Http\Controllers\Admin\SyncApiImportAgentsController;



class ImportAgentByCronJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ImportAgentByCronJob:cron';

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
         \Log::info("Cron is working fine!");
//               $controller = new ImportAgentsController(); // make sure to import the controller
//   $controller->durban();
//   $controller->pretoria();
//     $controller->capeTown();
//      $controller->johannesBurg();
//       $controller->portElizabeth();
//       $controller->innerCity();
//         $controller->eastLondon();
        // $controller2 = new SyncApiImportAgentsController(); // make sure to import
        // $controller2->unibaseAgentApiData();
    }
}
