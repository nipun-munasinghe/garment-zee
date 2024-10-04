<?php
    include 'config.php';

    if(isset($_GET['updatteid']))
    {
        $id = $_GET['updatteid'];
        $sqlQuery = "SELECT * from 'orders' WHERE " 
    }