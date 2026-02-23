<?php

function db_connect($db_key) {

    $databases = [
        'main' => [
            'host' => 'localhost',
            'user' => 'main_adm',
            /*TODO: env variable with passwords */ 
            'pass' => PASSWORD,
            'name' => 'main'
        ],
        'users' => [
            'host' => 'localhost',
            'user' => 'usrs_adm',
            'pass' => PASSWORD,
            'name' => 'users_db'
        ],
    ];


    if (!isset($databases[$db_key])) {
        die("Database key does not exist.");
    }

    $config = $databases[$db_key];

    $conn = mysqli_connect(
        $config['host'],
        $config['user'],
        $config['pass'],
        $config['name']
    );

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}