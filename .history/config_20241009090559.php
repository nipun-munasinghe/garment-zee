<?php

    $connection = new mysqli('localhost', 'root', '', 'iwt');

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "iwt";

    //connection with database
    $connection = mysqli_connect($server, $username, $password, $database);

    //check connection
    if(!$connection) {
        die("Connection failed: ". mysqli_connect_error());
    }

?>