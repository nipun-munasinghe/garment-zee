<?php include 'config.php';

if (isset($_GET['updateid'])) {
$no = $_GET['updateid'];
$sql = "SELECT * from `product` WHERE Item_No=$no";

$result = mysqli_query($connection, $sql);

$row = mysqli_fetch_assoc($result);

$no = $row['Item_No'];
$id = $row['Product_Id'];
$pname = $row['Product_name'];
$pprice = $row['Price'];
$pqty = $row['Product_description'];
$pquentity = $row['Stock_quantity'];
}

if (isset($_POST['add'])) {
    //$no = $_POST['no'];
    $id = $_POST['id'];
    $pname = $_POST['pname'];
    $pprice = $_POST['price'];
    $pdescription = $_POST['Product_description'];
    $pqty = $_POST['qty'];

    $sql = "UPDATE `product` SET 
                Item_No=$no,
                Product_Id='$id',
                Product_name='$pname',
                Price=$pprice,
                Product_description='$pdescription',
                stock_quantity=$pqty
            WHERE Item_No=$no;";

    $result = mysqli_query($connection, $sql);

    if ($result) {
        header('Location: product-mng.php');
    } else {
        die(mysqli_error($connection));
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
            <h2>Updade Product</h2>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="addinven" onsubmit="return validForm()">
                <table>
                    <!-- <tr>
                        <td>
                            <label for="ItemNo">Item No</label><br>
                            <input type="text" placeholder="Item number" name="No" readonly><br>
                        </td>
                    </tr> -->
                    <tr>
                        <td>
                            <label for="ID">Product ID</label><br>
                        </td>
                        <td>
                            <input type="text" placeholder="Product Id" name="id"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Name">Product Name</label>
                        </td>
                        <td>
                            <input type="text" placeholder="Product Name" name="pname"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="price">Price</label>
                        </td>
                        <td>
                            <input type="text" placeholder="Price" name="price"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>

                            <label for="dicription">Product Discription</label>
                        </td>
                        <td>
                            <textarea name="discription" id="discription" rows="4" column="80"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="quantity">Quentity</label>
                        </td>
                        <td>
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
    </div>
</body>

</html>