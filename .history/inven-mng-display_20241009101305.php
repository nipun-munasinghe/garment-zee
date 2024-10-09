<?php
include 'config.php';
?>

<!-- Delete data -->
<?php
if (isset($_GET['deleteid'])) {
    $ino = mysqli_real_escape_string($connection, $_GET['deleteid']);

    $sql = "DELETE FROM product WHERE Item_No = $ino";
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
    <link rel="stylesheet" href="CSS/prdc-mng-displa.css">
    <title>Document</title>
</head>

<body>
    <div id="prdc-display">
        <table id="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Inventory ID</th>
                    <th>Inventory Name</th>
                    <th>Current Stocks</th>
                    <th>Stock Alert</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM inventory;";
                $result = mysqli_query($connection, $sql);
                if ($result) {
                    $index = 1; // Initialize index
                    while ($row = mysqli_fetch_assoc($result)) {
                        $ino = $row['Item_No'];
                        $iId = $row['Inventor_Id'];
                        $iname = $row['Inventory_Name'];
                        $iCurntS = $row['CurrentQty'];
                        $iCostPrice = $row['costPrice'];
                        echo '
                            <tr>
                            <td>' . $index++ . '</td> <!-- Display index -->
                            <td>' . $iId . '</td>
                            <td>' . $iname . '</td>
                            <td>' . $iCurntS . '</td>
                            <td>' . $iCostPrice . '</td>
                            <td>
                                <a href="inven-mng-update.php?invenupdateid=' . $ino . '" style="background-color: rgb(0, 33, 91);
                                                                                        padding: 5px; 
                                                                                        color: white; 
                                                                                        border: 1px solid black; 
                                                                                        border-radius: 8px; 
                                                                                        text-decoration: none;">Update</a>
                                <a href="inven-mng-delete.php?deleteid=' . $ino . '" style="background-color: rgb(0, 33, 91);
                                                                                    padding: 5px; 
                                                                                    color: white; 
                                                                                    border: 1px solid black; 
                                                                                    border-radius: 8px; 
                                                                                    text-decoration: none;">Delete</a>
                            </td>
                            </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
