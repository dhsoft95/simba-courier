<?php
// app/Console/Commands/SyncDataCommand.php

namespace App\Console\Commands;

use App\Services\SimpleSyncService;
use Illuminate\Console\Command;

class SyncDataCommand extends Command
{
    protected $signature = 'sync:data
                           {--full : Run full sync instead of incremental}
                           {--recent=2 : Sync records from last X hours}';
    protected $description = 'Sync data from external database';

    public function handle(SimpleSyncService $syncService)
    {
        if ($this->option('full')) {
            $this->info(' Starting FULL optimized sync...');
            $result = $syncService->syncAllData();
        } else {
            $hours = $this->option('recent');
            $this->info(" Starting incremental sync (last {$hours} hours)...");
            $result = $syncService->syncRecentChanges($hours);
        }

        if ($result) {
            $this->info(' Data sync completed successfully!');
        } else {
            $this->error(' Data sync failed. Check logs for details.');
        }
    }
}
