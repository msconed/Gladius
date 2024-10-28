<?php

namespace App\Livewire\Dashboard\MainContainer\PageAdminka;

use Livewire\Component;
use App\Helpers\ArmaServer;

class ServerManagement extends Component
{

    public $test;

    public $test2;

    public $serverActive;

    public $timer = 5;
    public function checkStatus()
    {
        $timer = $this->timer;
        while ($timer >= 0) {
            sleep(1);
            $timer -= 1;
        };
        $this->serverStatus();
    }

    public function pingServer()
    {
        return json_decode(ArmaServer::serverPing(), true)['status'];
    }

    public function mount()
    {
        $this->serverStatus();
    }

    public function serverStatus()
    {
        $this->serverActive = ArmaServer::serverStatus();
    }

    public function serverStart()
    {
        $this->test = ArmaServer::startServer();
        $this->checkStatus();
        $this->dispatch('serverManagement', message: "Команда отправлена, сервер запускается!", type: 'success'); 
    }

    public function serverStop()
    {
        $this->test = ArmaServer::stopServer();
        $this->checkStatus();
        $this->dispatch('serverManagement', message: "Команда отправлена, сервер выключается!", type: 'success'); 
    }

    public function serverRestart()
    {
        $this->test = ArmaServer::serverRestart();
        $this->checkStatus();
        $this->dispatch('serverManagement', message: "Команда отправлена, сервер перезапускается!", type: 'success'); 
    }

    public function render()
    {
        return view('livewire.dashboard.main-container.page-adminka.server-management');
    }
}
