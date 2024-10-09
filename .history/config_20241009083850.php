<?php

    $connection = new mysqli('localhost', 'root', '', '');

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "garmen and textile";

    //connection with database
    $connection = mysqli_connect($server, $username, $password, $database);

    //check connection
    if(!$connection) {
        die("Connection failed: ". mysqli_connect_error());
    }

?>