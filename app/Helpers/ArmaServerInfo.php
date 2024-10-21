<?php

namespace App\Helpers;

use xPaw\SourceQuery\SourceQuery;
use Exception;

class ArmaServerInfo
{

    protected $serverAddress = '62.122.214.181';
    protected $serverPort = 2303;
    protected $sq_timeout = 1;
    public $SQ;

    public $serverInfo;

    public $missionName;

    public $version;

    public $countPlayers;

    public $maxPlayers;

    public $playersInfo;


    public $serverName;


    public function __construct()
    {
        $this->SQ = new SourceQuery();
        $this->SQ->Connect( $this->serverAddress, $this->serverPort, $this->sq_timeout );
        $this->serverInfo = $this->SQ->GetInfo();
        $this->playersInfo = $this->SQ->GetPlayers();
        $this->setServerInfo();
    }

    public function setServerInfo()
    {
        $this->missionName = $this->serverInfo['ModDesc'];

        $this->version = $this->serverInfo['Version'];

        $this->countPlayers = $this->serverInfo['Players'];

        $this->maxPlayers = $this->serverInfo['MaxPlayers'];

        $this->serverName = $this->serverInfo['HostName'];
        
    }




}