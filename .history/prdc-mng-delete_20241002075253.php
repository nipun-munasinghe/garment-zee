<?php
    include 'config.php';

    if(isset($_GET['deleteid'])) {
        $pid=$_GET['deleteid'];

        $sql="delete from `product` where id=$";
        $result=mysqli_query($con,$sql);
    
        if($result){
            header('Location:product-mng.php');
        }else{
            die(mysqli_error($con));
        }
    
    }
    
    if($result) {
        header('Location:poduct-mng.php');
    }
    else {
        die(mysqli_error($con));
    }

?>