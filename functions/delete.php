<?php
    include_once("../dbConnecttion\mysql_config_connection.php");
    $id = $_GET['id'];
    mysqli_query($dbc, "DELETE FROM tbls WHERE Subject_id='$id'"); 
    header("Location: ../index.php");

?>