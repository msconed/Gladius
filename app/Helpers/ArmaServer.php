<?php

namespace App\Helpers;


class ArmaServer 
{

     
    public static function sendRequest($command, $type='post', $path='api')
    {

        $data = [
            "apiKey" => config('armaserver.api_Key'),
            "action" => $command,
        ];

        $server_ip = config('armaserver.flask_arma_ip');
        $server_port = config('armaserver.flask_arma_port');

        $url = "$server_ip:$server_port/$path";
        $ch = curl_init( $url );

        $payload = json_encode( $data );
        if ($type == 'get') {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");  
        };
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, ['Content-Type:application/json']);
        # Return response instead of printing.
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt($ch, CURLOPT_TIMEOUT_MS, 10000);
        # Send request.
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    public static function getCountPlayers()
    {

            $response = self::sendRequest(command: 'playersCount', type: 'get', path: 'playersCount');
            if ($response) {
                return $response;
            } else {
                return 0;
            }

    }

    public static function serverPing()
    {
        <<<TEXT
            Получение статуса сервера.
            Запускается/Запущен
        TEXT;

        return self::sendRequest(command: 'ping', type: 'get', path: 'ping');
    }

    public static function serverStatus()
    {
        $isActive = false;
        $response = self::sendRequest(command: 'status', type: 'get', path: 'status');
        if ($response)
        {
            try {
                $json = json_decode($response, true);
                if (isset($json['error'])) 
                {
                    $isActive = false;
                } else 
                {
                    $isActive = $json['status'] == 'running' ? true : false;
                }
            } catch (\Exception $e) {
                $isActive = false;
            }
        } else {
                $isActive = false;
        }
        return $isActive;
    }

    public static function startServer()
    {
        return self::sendRequest('start');
    }

    public static function stopServer()
    {

        return self::sendRequest(command: 'stop');
    }

    public static function serverRestart()
    {

        return self::sendRequest(command: 'restart');
    }



}