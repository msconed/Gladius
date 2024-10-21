<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;
use App\Helpers\ArmaServerDB;

class MainContainer extends Component
{

    public $page_id = 'dashboard.main';
    // Варианты: []'dashboard.main', 'dashboard.bans', 'dashboard.adminka']

    public $border_text = '<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"></span>';

    public function render()
    {
        return view('livewire.dashboard.main-container');
    }

    public function switchPage($page_id)
    {

        $this->page_id = $page_id;

    }
}
