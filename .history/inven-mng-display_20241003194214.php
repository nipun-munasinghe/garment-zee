<?php
include 'config.php';
?>


<!-- Delete data -->
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
                        $iId = $row['Inventor_Id'];
                        $iCurntS = $row['Current_stock'];
                        $iStkAlert = $row['Stock_alert'];
                        echo '
                            <tr>
                            <th scope="row">' . $no . '</th>
                            <td>' . $iname . '</td>
                            <td>' . $iId . '</td>
                            <td>' . $iCurntS . '</td>
                            <td>' . $iStkAlert . '</td>
                            <td>
                                <a href="inven-mng-update.php?invenupdateid=' . $no . '" style="background-color: black; color: white; border: 1px solid black;">Update</a>
                                <a href="inven-mng-delete.php?deleteid=' . $no . '">Delete</a>
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