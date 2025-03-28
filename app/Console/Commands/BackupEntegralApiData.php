<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BackupEntegralApiData extends Command
{
    protected $signature = 'backup:entegral-api-data';
    protected $description = 'Backup EntegralApiData table to storage';

    public function handle()
    {
        $data = DB::table('entegral_api_data')->get(['id', 'property_id', 'agent_id']);
        $fileName = 'backups/entegral_api_data_' . now()->format('Y_m_d_H_i_s') . '.json';

        Storage::put($fileName, $data->toJson());

        $this->info('Backup completed: ' . $fileName);
    }
}
