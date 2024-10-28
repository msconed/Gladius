<?php

return [

    'server_adress' => env('ARMA_SERVER_DB_ADDRES', ''),

    'db_user' => env('ARMA_SERVER_DB_USER', ''),

    'db_password' => env('ARMA_SERVER_DB_PASSWORDS', ''),

    'pdo_dsn' => env('ARMA_SERVER_DB_DSN', ''),


    'rcon_port' => env('ARMA_SERVER_RCON_PORT', 2306),

    'rcon_password' => env('ARMA_SERVER_RCON_PASSWORD', ''),

    'api_Key' => env('ARMA_SERVER_APIKEY', ''),

    'flask_arma_port' => env('ARMA_SERVER_FLASK_PORT', 4500),
    'flask_arma_ip' => env('ARMA_SERVER_FLASK_IP', ''),

];