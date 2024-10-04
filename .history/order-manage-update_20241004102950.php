<?php
    include 'config.php';

    if(isset($_GET['updatteid']))
    {
        $id = $_GET['updatteid'];
        $sqlQuery = "SELECT * from 'orders' WHERE Order_ID = $id";
        
        $result = mysqli_query($connection, $sqlQuery);

        $row = mysqli_fetch_assoc($result);

        $oid = $row['Order_ID'];
        $oName = $row['fName'];
        $oAmount = $row['amount'];
        $oStatus = $row['fStatus'];
        $oEmail = $row['fEmail'];
        $oAddress = $row['fAddress'];
        $ReciptUrl = $row['recipt'];
    }