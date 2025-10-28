<?php

namespace App\Jobs;

use App\Services\SimpleSyncService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SyncDataJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $timeout = 600;
    public $tries = 3;

    public function handle(SimpleSyncService $syncService)
    {
        $syncService->syncAllData();
    }

    public function failed(\Throwable $exception)
    {
        \Log::error('Data sync job failed: ' . $exception->getMessage());
    }
}
