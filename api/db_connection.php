<?php

    $dbhost = "localhost";
    $dbusername - "root";
    $dbpassward = "root";
    $dbname = "lectfour";

    $conn = new mysqli($dbhost, $dbusername, $dbpassward, $dbname);

    if($mysqli -> connect_error){
        echo 'Failed to connect to Database: ' . $mysqli -> connect_error;
        exit();
    }

?>