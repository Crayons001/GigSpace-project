<?php

    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'gigspace_db';

    $conn = new mysqli($host, $username, $password, $database);
    if ($conn->connect_errno){
        echo 'Failed to connect to MySQL: '.$conn->connect_error;
        exit;
    }
    

?>