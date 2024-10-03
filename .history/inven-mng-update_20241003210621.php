<?php include 'config.php';

if (isset($_GET['invenupdateid'])){
$no = $_GET['invenupdateid'];
$sql = "SELECT * from `inventory` WHERE Item_No=$no;";

$iresult = mysqli_query($connection, $sql);

$row = mysqli_fetch_assoc($iresult);

$no = $row['Item_No'];
$id = $row['Inventor_Id'];
$iname = $row['Inventory_Name'];
$iCurrentS = $row['Current_stock'];
$iStckAlert = $row['Stock_alert'];
}

if (isset($_POST['addinven'])) {
    //$no = $_POST['no'];
    $id = $_POST['id'];
    $iname = $_POST['invenName'];
    $iCurrentS = $_POST['currentStock'];
    $iSAlert = $_POST['stockAlert'];

    $sql = "UPDATE `inventory` SET 
                Item_No=$no,
                Inventor_Id='$id',
                Inventory_Name='$iname',
                Current_stock=$iCurrentS,
                Stock_alert='$iSAlert',
            WHERE Item_No=$no;";

    $result = mysqli_query($connection, $sql);

    if ($result) {
        header('Location: inventory-mng.php');
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
    <link rel="stylesheet" href="CSS/inventory-management.css">

    <title>Inventory Management Page</title>
</head>

<body>
    <?php
    include "header.php";
    ?>
    <hr>
    <div class="Icontainer">
        <div class="form-section" id="formPopup">
            <h2>Update Inventory</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="addinven">
                <table>
                    <tr>
                        <td>
                            <label for="ID">Inventory ID</label>
                        </td>
                        <td>
                            <input type="text" placeholder="Inventory Id" name="id"
                            value=<?php echo $id; ?>><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="ID">Inventory Name</label>
                        </td>
                        <td>
                            <input type="text" placeholder="Inventory Name" name="invenName"
                            value=<?php echo $id; ?>><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="ID">Current Stock</label>
                        </td>
                        <td>
                            <input type="text" placeholder="Current Stock" name="currentStock"
                            value=<?php echo $id; ?>><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="ID">Stock Alert</label>
                        </td>
                        <td>
                            <input type="text" placeholder="Stock Alert" name="stockAlert"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" value="add" class="btn" name="addinven">Update</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>