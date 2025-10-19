<?php

namespace App\Console\Commands;

use App\Http\Controllers\Admin\ImportAgentsController;
use App\Http\Controllers\Admin\SyncApiImportAgentsController;
use Illuminate\Console\Command;

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
        $controller = new ImportAgentsController();
        $controller->durban();
        $controller->pretoria();
        $controller->capeTown();
        $controller->johannesBurg();
        $controller->portElizabeth();
        $controller->innerCity();
        $controller->eastLondon();
        $controller2 = new SyncApiImportAgentsController();
        $controller2->unibaseAgentApiData();
    }
}
