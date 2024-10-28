<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;
use App\Helpers\ArmaServerDB;
use Livewire\Attributes\Url;

class MainContainer extends Component
{

    #[Url(keep: true, history: true)]
    public $mode = 'main';
    // Варианты: []'main', 'bans', 'adminka']

    public $border_text = '<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"></span>';

    public function render()
    {
        return view('livewire.dashboard.main-container');
    }

    public function switchPage($name)
    {

        $this->mode = $name;

    }
}
