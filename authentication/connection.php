<?php
    $server = "localhost";
    $password="";
    $username = "root";
    $db="csit";
    $connect = mysqli_connect($server, $username, $password, $db);
    if(!$connect){
        die("Connection failed");
    }
    
?>