<?php

namespace App\Livewire\Dashboard\MainContainer\PageBans;

use Livewire\Component;
use App\Helpers\ArmaServerDB;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Cache;

class ShowBansList extends Component
{


    public $bans = [];
    public $currentLength = 1;
    public $currentBansArray;
    public $bansCountAll;
    public $bansCountCurrent;
    public $loadMoreCount = 5;

    public $myBanData = [];



    public function mount() 
    {
        $this->bans = ArmaServerDB::getBans();
        $this->bansCountAll = count($this->bans);

        $this->currentBansArray = array_slice($this->bans, 0, $this->currentLength);
        $this->bansCountCurrent = count($this->currentBansArray);
        $this->checkMyBan();
    }

    public function checkMyBan()
    {
        $steamid = Auth::user()->steamid;
        $this->myBanData = ArmaServerDB::checkUserBan($steamid);
        if ($this->bans)
        {
            forEach ($this->bans as $ban_info)
            {
                if ($ban_info['steamid'] == $steamid)
                {
                    $this->myBanData = $ban_info;
                    break;
                }

            }
        }
    }

    public function loadMoreBans()
    {
        $this->currentLength = $this->currentLength + $this->loadMoreCount;
        $this->currentBansArray = array_slice($this->bans, 0, $this->currentLength);
        $this->bansCountCurrent = count($this->currentBansArray);

    }

    public function loadAllBans()
    {
        $this->currentLength = $this->currentLength + $this->loadMoreCount;
        $this->currentBansArray = array_slice($this->bans, 0, $this->bansCountAll);
        $this->bansCountCurrent = count($this->currentBansArray);

    }

    public function render()
    {
        return view('livewire.dashboard.main-container.page-bans.show-bans-list');
    }
}
