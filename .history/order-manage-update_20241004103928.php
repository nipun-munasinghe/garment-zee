<?php
    include 'config.php';

    if(isset($_GET['updatteid']))
    {
        $id = $_GET['updatteid'];
        $sqlQuery = "SELECT * from 'orders' WHERE Order_ID = $id";
        
        $result = mysqli_query($connection, $sqlQuery);

        $row = mysqli_fetch_assoc($result);

        $oid = $row['Order_ID'];
        $oName = $row['Customer_name'];
        $oAmount = $row['Price'];
        $oStatus = $row['Order_status'];
        $oEmail = $row['Order_email'];
        $oAddress = $row['Address'];
        $ReciptUrl = $row['Receipt_url'];
    }

    if(isset($_POST['add']))
    {
        $oid = $_POST['Id'];
        $oName = $_POST['fName'];
        $oAmount = $_POST['amount'];
        $oStatus = $_POST['fStatus'];
        $oEmail = $_POST['fEmail'];
        $oAddress = $_POST['fAddress'];
        $ReciptUrl = $_POST['recipt'];

        $sqlQuery = "UPDATE" `orders` SET
    }