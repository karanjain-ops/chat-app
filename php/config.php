<?php
    $host = 'remotemysql.com';
    $db = 'dnfzBbjJVE';
    $user = 'dnfzBbjJVE';
    $pass = '1SWAsU3iQp';
    $conn = mysqli_connect($host, $user, $pass, $db);
    if(!$conn){
        echo "Database connected" . mysqli_connect_error();
    }
?>