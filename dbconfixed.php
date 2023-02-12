<?php
    include 'config.php';

    $con = mysqli_connect($config['host'], $config['user'], $config['password'], $config['database']);

    if($con == false){
        echo "Connection not successful";
    }
?>