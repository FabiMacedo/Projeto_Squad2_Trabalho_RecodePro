<?php 

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbName = "sinalcode";

    $conn = mysqli_connect($host, $user, $pass, $dbName);

    if ($conn) {
        
        return true;

    } else {

        die ("falha" .mysqli_errno($conn));
    }

    