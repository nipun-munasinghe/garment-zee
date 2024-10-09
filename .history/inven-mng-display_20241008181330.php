<?php
include 'config.php';
?>


<!-- Delete data -->
<?php
    include 'config.php';

    if(isset($_GET['deleteid'])) {
        $ino = mysqli_real_escape_string($connection, $_GET['deleteid']);

        $sql="delete from `product` where Item_No=$ino";
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
                        $ino = $row['Item_No'];
                        $iname = $row['Inventory_Name'];
                        $iId = $row['Inventory_ID'];
                        $iCurntS = $row['CurrentQty'];
                        $iCostPrice = $row['costPrice'];
                        echo '
                            <tr>
                            <th scope="row">' . $ino . '</th>
                            <td>' . $iId . '</td>
                            <td>' . $iname . '</td>
                            <td>' . $iCurntS . '</td>
                            <td>' . $iCostPrice . '</td>
                            <td>
                                <a href="inven-mng-update.php?invenupdateid=' . $ino . '"style="background-color: rgb(0, 33, 91);
                                                                                        padding:5px; 
                                                                                        color: white; 
                                                                                        border: 1px solid black; 
                                                                                        border-radious: 8px; 
                                                                                        text-decoration: none;">Update</a>
                                <a href="inven-mng-delete.php?deleteid=' . $ino . '"style="background-color: rgb(0, 33, 91);
                                                                                    padding:5px; 
                                                                                    color: white; 
                                                                                    border: 1px solid black; 
                                                                                    border-radious: 8px; 
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