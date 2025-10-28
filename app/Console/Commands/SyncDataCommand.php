<?php
// app/Console/Commands/SyncDataCommand.php

namespace App\Console\Commands;

use App\Services\SimpleSyncService;
use Illuminate\Console\Command;

class SyncDataCommand extends Command
{
    protected $signature = 'sync:data';
    protected $description = 'Manually sync data from external database';

    public function handle(SimpleSyncService $syncService)
    {
        $this->info(' Starting data sync...');

        $startTime = now();

        if ($syncService->syncAllData()) {
            $duration = $startTime->diffInSeconds(now());
            $this->info("✅ Data sync completed successfully in {$duration} seconds!");
        } else {
            $this->error('❌ Data sync failed. Check logs for details.');
        }
    }
}
