<?php
include 'config.php';

if (isset($_POST['add'])) {
    $id = $_POST['id'];
    $name = $_POST['pname'];
    $price = $_POST['price'];
    $discription = $_POST['discription'];
    $qty = $_POST['qty'];

    $sql = "INSERT into `product`(Product_Id, Product_name, Price, Product_description, stock_quantity)
        values('$id', '$name', '$price', '$discription','$quentity');";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('Location:product-mng.php');
        exit;
    } else {
        die("Error: " . mysqli_error($con));
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

    <script>
        function validForm() {
            let id = document.forms["addinven"]["id"].value;
            let pname = document.forms["addinven"]["pname"].value;
            let qty = document.forms["addinven"]["qty"].value;
            let price = document.forms["addinven"]["price"].value;

            if (id == "") {
                alert("Product ID Must be filled out.");
                return false;
            }
            if (pname == "") {
                alert("Product name must be filled out.");
                return false;
            }
            if (qty == "" || isNaN(qty)) {
                alert("Please enter a vaid quantity");
                return false;
            }
            if (price == "" || isNaN(price)) {
                alert("Please enter a valid price");
                return false;
            }
            return true;
        }
    </script>
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
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="addinven" onsubmit="return validForm()">
                <table>
                    <!-- <tr>
                        <td>
                            <label for="ItemNo">Item No</label><br>
                            <input type="text" placeholder="Item number" name="No" readonly><br>
                        </td>
                    </tr> -->
                    <tr>
                        <td>
                            <label for="ID">Product ID</label>
                            <input type="text" placeholder="Product Id" name="id"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Name">Product Name</label>
                            <input type="text" placeholder="Product Name" name="pname"><br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="price">Price</label>
                            <input type="text" placeholder="Price" name="price"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="dicription">Product Discription</label>
                            <textarea name="discription" id="discription" rows="4" column="50" name="discription"></textarea>>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="quantity">Quentity</label><br>
                            <input type="text" placeholder="Quantity" name="qty"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" value="submit" class="btn" name="add">Add</button>
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