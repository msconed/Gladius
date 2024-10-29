<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use App\Helpers\ArmaServer;

class updatearmaserverinfo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:updatearmaserverinfo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Cache::put('ArmaServerCountPlayers', ArmaServer::getCountPlayers());
        Cache::put('ArmaServerIsOnline', ArmaServer::serverStatus());
    }
}
