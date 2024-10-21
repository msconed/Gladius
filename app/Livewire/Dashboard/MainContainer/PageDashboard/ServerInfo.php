<?php

namespace App\Livewire\Dashboard\MainContainer\PageDashboard;

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
        $this->totalPlayers = ArmaServerDB::totalPlayers();
    }

    public function updateInfo() 
    {

            $q = new ArmaServerInfo();
            $this->countPlayers = $q->countPlayers;
            $this->isOnlineText = '<i class="fa-solid fa-circle" style="color: #66ff00;"></i> Включен';

            $this->countPlayers = 0;
            $this->isOnlineText = '<i class="fa-solid fa-circle" style="color: #ff0000;"></i> Выключен';

    }



    public function render()
    {
        return view('livewire.dashboard.main-container.page-dashboard.server-info');
    }
}
