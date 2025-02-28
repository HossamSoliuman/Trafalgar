<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
// use App\Http\Controllers\Admin\RemoveSoldPropertyController;
//use App\Http\Controllers\Admin\ImportPropertyController;
use App\Http\Controllers\Admin\SyncApiPropertyImportController;
use App\Models\EntegralApiData;



class ImportPropertyByCronJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ImportPropertyByCronJob:cron';

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
         
        // EntegralApiData::truncate();
//               $controller = new ImportPropertyController(); // make sure to import the controller
//   $controller->durban();
//   $controller->pretoria();
//     $controller->capeTown();
//      $controller->johannesBurg();
//       $controller->portElizabeth();
//       $controller->innerCity();
//         $controller->eastLondon();
        $controller2 = new SyncApiPropertyImportController(); // make sure to import
        $controller2->unibaseApiData();
        
           $val1 = "Cron job is working fine on unibaseApiData property! ".date('Y/m/d H:i:s');
         \Log::info($val1);
    }
}
