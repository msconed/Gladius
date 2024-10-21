<?php

namespace App\Livewire\Dashboard\MainContainer\PageBans;

use Livewire\Component;
use App\Helpers\ArmaServerDB;
use Illuminate\Support\Facades\Auth;

class Main extends Component
{
    public function render()
    {

        return view('livewire.dashboard.main-container.page-bans.main');
    }
}
