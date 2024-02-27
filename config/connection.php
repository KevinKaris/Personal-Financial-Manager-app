<?php
    $server='localhost';
    $user='id21916414_mapato';
    $pass='Kevin-35852744';
    $dbname='id21916414_mapato';

    $conn=mysqli_connect($server,$user,$pass,$dbname);

    if(!$conn){
        die(mysqli_error($conn));
    }
    ?>
