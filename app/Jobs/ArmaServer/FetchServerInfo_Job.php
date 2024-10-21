<?php

namespace App\Jobs\ArmaServer;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Cache;
use App\Helpers\ArmaServerDB;

class FetchServerInfo_Job implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle()
    {
        // try {
        //     $data = ArmaServerDB::getBans();
        // } catch (\Exception $e) {
        //     $data = [];
        // }


        // $dataStats = ArmaServerDB::getKillsStatistics();
        // $recompileStats = [];
        // foreach ($dataStats as $stat) {
        //     $recompileStats[$stat['steamid']] = $stat;
        // }


        // Cache::set('ArmaServerBans', $data);
        // Cache::set('ArmaServerCountAllPlayers', ArmaServerDB::totalPlayers());
        // Cache::set('ArmaServerStatisticsPlayers', $recompileStats);
    }
}
