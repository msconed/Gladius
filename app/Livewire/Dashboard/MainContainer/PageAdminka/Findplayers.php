<?php

namespace App\Livewire\Dashboard\MainContainer\PageAdminka;

use Livewire\Component;
use App\Helpers\ArmaServerDB;
use Livewire\Attributes\Url;

class Findplayers extends Component
{
    #[Url]
    public $search = '';



    public function render()
    {
        $data = [];
        $q = $this->search;
        if (strlen($q) > 0) {
            $data = ArmaServerDB::getUsersInfoByQuery($this->search);
        };
        

        return view('livewire.dashboard.main-container.page-adminka.findplayers', compact('data'));
    }
}
