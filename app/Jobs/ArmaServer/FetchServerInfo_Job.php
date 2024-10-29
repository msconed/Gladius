<?php

namespace App\Jobs\ArmaServer;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Cache;
use App\Helpers\ArmaServer;


class FetchServerInfo_Job implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle()
    {
        Cache::put('ArmaServerCountPlayers', ArmaServer::getCountPlayers());
        Cache::put('ArmaServerIsOnline', ArmaServer::serverStatus());
    }
}
