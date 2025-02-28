<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\Admin\ImportPropertyController;
use App\Http\Controllers\Admin\ImportAgentsController;

class ImportEntegralPretoriaProperty extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'entegralPretoriaProperty:cron';

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
       
        $controller = new ImportPropertyController(); // make sure to import 
        $controller->pretoria();
        
        
            $val1 = "Cron job is working fine on pretoria property! ".date('Y/m/d H:i:s');
         \Log::info($val1);
        
         $controllerAgent = new ImportAgentsController(); // make sure to 
            $controllerAgent->pretoria();
            
                $val2 = "Cron job is working fine on pretoria agent! ".date('Y/m/d H:i:s');
         \Log::info($val2);
  
    }
}
