<?php
    include 'config.php';

    if(isset($_GET['deleteid'])) {
        $pid=$_GET['deleteid'];

        $sql="delete from `product-mamagment` where id=$pid";
        $result=mysqli_query($con,$sql);
    
        if($result){
            header('Location:product-mng.php');
        }else{
            die(mysqli_error($con));
        }
    
    }

<<<<<<< HEAD

    
=======
    if($result) {
        header('Location:poduct-mng.php');
    }
    else {
        die(mysqli_error($con));
    }
>>>>>>> 90efec45cba5dcb14437fb9ff177079ae45bcf23

?>