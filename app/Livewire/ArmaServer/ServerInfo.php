<?php

namespace App\Livewire\ArmaServer;

use Illuminate\Support\Facades\Cache;
use Livewire\Component;
use App\Helpers\ArmaServerInfo;
use App\Helpers\ArmaServerDB;

class ServerInfo extends Component
{
    public $countPlayers;

    public $isOnlineText;

    public $totalPlayers;

    public function mount() 
    {
        $this->updateInfo();
        $this->totalPlayers = Cache::get('ArmaServerCountAllPlayers', 0);
    }

    public function updateInfo() 
    {
        try {
            $q = new ArmaServerInfo();
            $this->countPlayers = $q->countPlayers;
            $this->isOnlineText = '<i class="fa-solid fa-circle" style="color: #66ff00;"></i> Включен';
        } catch (\Exception $e) {
            $this->countPlayers = 0;
            $this->isOnlineText = '<i class="fa-solid fa-circle" style="color: #ff0000;"></i> Выключен';
        };
    }



    public function render()
    {
        return view('livewire.arma-server.server-info');
    }
}
