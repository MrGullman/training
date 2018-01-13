<?php

    ob_start();
	session_start();

    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'csv');
    define('DB_CHARSET', 'utf8');

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    $conn->set_charset(DB_CHARSET);

    if($conn->connect_error){
        die("Connection Failed: " . $conn->connect_error);
    }


?>
