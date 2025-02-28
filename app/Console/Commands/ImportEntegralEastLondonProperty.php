<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\Admin\ImportPropertyController;
use App\Http\Controllers\Admin\ImportAgentsController;

class ImportEntegralEastLondonProperty extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'entegralEastLondonProperty:cron';

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
         
       
        $controller = new ImportPropertyController(); // make sure to 
        $controller->eastLondon();
        
         $val1 = "Cron job is working fine on east London property! ".date('Y/m/d H:i:s');
         \Log::info($val1);
        
         $controllerAgent = new ImportAgentsController(); // make sure to 
            $controllerAgent->eastLondon();
            
             $val2 = "Cron job is working fine on east London agent! ".date('Y/m/d H:i:s');
         \Log::info($val2);
        
    }
}
