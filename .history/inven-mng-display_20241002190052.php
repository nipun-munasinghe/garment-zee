<?php
include 'config.php';
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
                    <th>Inventory Name</th>
                    <th>Inventory ID</th>
                    <th>Current Stocks</th>
                    <th>Stock Alert</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * From `inventory`;";
                $result = mysqli_query($connection, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $no = $row['Item_No'];
                        $iname = $row['Inventory_Name'];
                        $iId = $row['Inventory_Id'];
                        $iCurntS = $row['Current_stock'];
                        $iStkAlert = $row['Stock_alert'];
                        echo '
                            <tr>
                            <th scope="row">' . $no . '</th>
                            <td>' .  . '</td>
                            <td>' . $pname . '</td>
                            <td>' . $pprice . '</td>
                            <td>' . $pdescription . '</td>
                            <td>' . $stock . '</td>
                            <td>
                                <a href="prdc-mng-update.php?updateid=' . $no . '" style="background-color: blue color: black; border: 1px solid black;">Update</a>
                                <a href="prdc-mng-delete.php?deleteid=' . $no . '">Delete</a>"
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