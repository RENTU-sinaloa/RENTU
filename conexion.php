<?php

    define('DB_SERVER', 'postgres: // hmhsvvbbunypud : ae8fe03171e6eef4c0414899553757f04979fb90b6fc81e53bc9490c1b7d3ead @ ec2-23-21-91-183.compute-1.amazonaws.com : 5432 / db9kr5e');
    define('DB_USERNAME', 'hmhsvvbbunypud');
    define('DB_PASSWORD', 'ae8fe03171e6eef4c0414899553757f04979fb90b6fc81e53bc9490c1b7d3ead');
    define('DB_NAME', 'db9kr5egb5oip6');

    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if($link === false){
        die("ERROR EN LA CONEXION" . mysqli_connect_error());
    }
?>
