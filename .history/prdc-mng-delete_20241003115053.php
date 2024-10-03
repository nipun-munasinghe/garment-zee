<?php
    include 'config.php';

    if(isset($_GET['deleteid'])) {
        $no = mysqli_real_escape_string($connection, $_GET['deleteid']);

        $sql="delete from `product` where Item_No=$no";
        $result=mysqli_query($connection,$sql);
    
        if($result){
            header('Location:product-mng.php');
        }else{
            die(mysqli_error($connection));
        }
    
    }
    // Reset auto-increment after deleting records
mysqli_query($connection, "SET @num := 0;");
mysqli_query($connection, "UPDATE your_table SET id = @num := (@num+1);");
mysqli_query($connection, "ALTER TABLE your_table AUTO_INCREMENT = 1;");
