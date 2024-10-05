
<?php
    include 'config.php';
        
    if(isset($_GET['deleteid'])){
        $no = mysqli_real_escape_string($connection, $_GET['deleteid']);

        $sql="delete from `product` where id=$no";
        $result=mysqli_query($connection,$sql);
    
        if($result){
            header('Location:product-mng.php');
        }else{
            die(mysqli_error($connection));
        }
    
    }
}