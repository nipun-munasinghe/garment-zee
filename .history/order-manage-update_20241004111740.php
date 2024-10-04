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

    if (isset($_POST['add']))
    {
        $oid = $_POST['Id'];
        $oName = $_POST['fName'];
        $oAmount = $_POST['amount'];
        $oStatus = $_POST['fStatus'];
        $oEmail = $_POST['fEmail'];
        $oAddress = $_POST['fAddress'];
        $ReciptUrl = $_POST['recipt'];

        $sqlQuery = "UPDATE `orders` SET
                Order_ID = $oid,
                Customer_name = $oName,
                Price = $oAmount,
                Order_status = $oStatus,
                Order_email = $oEmail,
                Address = $oAddress,
                Receipt_url = $ReciptUrl WHERE Order_ID = $oid;";

        $result = mysqli_query($connection, $$sqlQuery);

        if($result)
        {
            header('Location : order-management.php');
        }
        else
        {
            die(mysqli_error($connection));
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
        
        

    