<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
use App\Jobs\ArmaServer\FetchServerInfo_Job;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use App\Helpers\ArmaServer;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();




 
Schedule::call(function () {
    Cache::put('ArmaServerCountPlayers', ArmaServer::getCountPlayers());
    Cache::put('ArmaServerIsOnline', ArmaServer::serverStatus());
})->everyThirtySeconds();


