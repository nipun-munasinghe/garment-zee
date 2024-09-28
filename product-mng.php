<?php
include 'config.php';


if (isset($_POST['add'])) {
    $id = $_POST['id'];
    $name = $_POST['pname'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];

    $sql = "INSERT into `product-mamagment`(id, pname, pqty, pprice)
        values('$id', '$name', '$price', '$qty');";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('Location:product-mng.php');
    } else {
        die(mysqli_error($con));
    }
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
    <link rel="stylesheet" href="CSS/product-management.css">

    <title>Product Management Page</title>
</head>

<body>
    <?php
    include "header.php";
    ?>
    <hr>
    <div class="pcontainer">
        <h1>Welcome To Product Managemnet Page!</h1>
        <div class="form">
            <h2>Add Product</h2>
            <form action="" method="post">
                <table>
                    <tr>
                        <td>
                            <input type="text" placeholder="Product Id" name="id"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" placeholder="Product Name" name="pname"><br>
                        </td>
                    </tr>
                    <tr>
                    <tr>
                        <td>
                            <input type="text" placeholder="Price" name="price"><br>
                        </td>
                    </tr>
                    </tr>
                    <td>
                        <input type="text" placeholder="Quantity" name="qty"><br>
                    </td>
                    </tr>
                    </tr>
                    <td>
                        <button type="submit" class="btn" name="add">Add</button>
                    </td>
                    </tr>
                </table>
            </form>
        </div>
        <?php
    include 'prdc-mng-display.php';

    ?>
    </div>
   

</body>

</html>