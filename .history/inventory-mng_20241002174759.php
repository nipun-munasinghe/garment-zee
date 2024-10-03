<?php 
    include 'config.php';

    if (isset($_POST['add'])){
        $iname = $_POST('inven_name');
        $iId = $_POST('id');
        $iCurnttS = $_POST('currentStock');
        $iStkAlert = $_POST('stockAlert');

        $sql = "INSERT into `inventory`(Inventory_Name, Inventory_ID, Current_stock, Stock_alert)
                    VALUES($iname, $iId, $iCurrent)"

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
    include("header.php");
    ?>
    <div class="inven-container">
        <h1>Welcome to Inventory Management Page</h1>
        <div class="form-section">
            <h2>Add Inventory</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="addinven">
                <table>
                    <tr>
                        <td>
                            <label for="ID">Inventory Name</label>
                        </td>
                        <td>
                            <input type="text" placeholder="Inventory Name" name="inven_name"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="ID">Inventory ID</label>
                        </td>
                        <td>
                            <input type="text" placeholder="Inventory Id" name="id"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="ID">Current Stock</label>
                        </td>
                        <td>
                            <input type="text" placeholder="Current Stock" name="currentStock"><br>
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
                            <button type="submit" value="add" class="btn" name="add">Add</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>