<?php

    DEFINE('DB_USER', 'root');
    DEFINE('DB_PASS', '');
    DEFINE('DB_HOST', 'localhost');
    DEFINE('DB_NAME', 'dbschedule');

    $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) 
    or die('Could not connect to mysql: ' . mysql_error());

?>