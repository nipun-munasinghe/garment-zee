<?php
<<<<<<< Updated upstream
=======
    $con = new mysqli('localhost', 'root', '', 'textile_&_garment_management_system');
>>>>>>> Stashed changes

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "textile_&_garment_management_system";

    //connection with database
    $connection = mysqli_connect($server, $username, $password, $database);

    //check connection
    if(!$connection) {
        die("Connection failed: ". mysqli_connect_error());
    }

?>