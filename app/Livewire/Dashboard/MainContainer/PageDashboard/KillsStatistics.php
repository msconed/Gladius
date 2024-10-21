<?php

namespace App\Livewire\Dashboard\MainContainer\PageDashboard;

use Livewire\Component;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;
use App\Helpers\ArmaServerDB;

class KillsStatistics extends Component
{

    public $myStatistics = [];



    public function mount() 
    {
        $steamid = Auth::user()->steamid;
        $data = ArmaServerDB::getKillsStatistics($steamid);
        $this->myStatistics = $data;
    } 
    public function render()
    {
        return view('livewire.dashboard.main-container.page-dashboard.kills-statistics');
    }
}
