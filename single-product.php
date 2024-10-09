<?php 
    session_start();          
    require_once 'config.php';

    if(isset($_POST['buynowbtn'])){
        $productid = $_POST['productid'];
    }

    $sql = "SELECT * FROM products WHERE Product_ID = '$productid' ;";
    $result = mysqli_query($connection, $sql);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $name = $row['Product_name'];
        $price = $row['Price'];
        $description = $row['Product_description'];
        $img_url = $row['img_url'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Insert font family from google fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>

    <!-- link the style sheet -->
    <link rel="stylesheet" href="CSS/single-product.css">

    <title>Single Product Page</title>
</head>
<body>
    <?php
    include ('header.php');
    ?>
    <center>
        <div class="product-details">
            <img class = "i1" src="Images/products/<?php echo $img_url ?>" alt="Product Image" width = "500px" height = "500px">
           
            <h2 id="pName"><?php echo $name ?></h2>
            <h3>Price: Rs.<span id="product-price"><?php echo $price ?></span></h3>
            <p class="description">"<?php echo $description ?>"</p>
            <form action="place-order.php" method="POST">
                <input type="hidden" name="productID" value="<?php echo $productid ?>">
                <input type="hidden" name="priCe" value="<?php echo $price ?>">
                <button id="buy-now-btn" type="submit" name="ordernow" >Buy Now</button>
            </form>
            <br><br>
        </div>
    </center>
    <?php 
    include ('footer.php');
    ?>
</body>
</html>