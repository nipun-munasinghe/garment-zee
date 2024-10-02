<?php
    include 'config.php';

    if(isset($_GET['deleteid'])) {
        $no=$_GET['deleteid'];

        $sql="delete from `product` where Item_no=$no";
        $result=mysqli_query($connection,$sql);
    
        if($result){
            header('Location:product-mng.php');
        }else{
            die(mysqli_error($connection));
        }
    
    }
    
    if($result) {
        header('Location:poduct-mng.php');
    }
    else {
        die(mysqli_error($connection));
    }

?>