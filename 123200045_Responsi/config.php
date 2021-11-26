<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "responsi";

    $connect = new mysqli($servername, $username, $password, $db);
    
    if($connect -> connect_error){
        die ('Gagal terhubung ke database :'. $connect->connect_error);
    }

?>