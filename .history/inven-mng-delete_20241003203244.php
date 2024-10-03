<?php
    include 'config.php';

    if(isset($_GET['deleteid'])) {
        $no = mysqli_real_escape_string($connection, $_GET['deleteid']);

        $sql="delete from `inventory` where Item_No=$no";
        $result=mysqli_query($connection,$sql);
    
        if($result){
            header('Location:inventory-mng.php');
        }else{
            die(mysqli_error($connection));
        }
    
    }