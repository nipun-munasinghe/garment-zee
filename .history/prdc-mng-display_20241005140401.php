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
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Discription</th>
                    <th>Stock Quentity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * From `product`;";
                $result = mysqli_query($connection, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $ino = $row['Item_No'];
                        $pid = $row['Product_Id'];
                        $pname = $row['Product_name'];
                        $pprice = $row['Price'];
                        $pdescription = $row['Product_description'];
                        $stock = $row['Stock_quantity'];

                        echo '
                            <tr>
                            <td scope="row">' . $pno . '</td>
                            <td>' . $pid . '</td>
                            <td>' . $pname . '</td>
                            <td>' . $pprice . '</td>
                            <td>' . $pdescription . '</td>
                            <td>' . $stock . '</td>
                            <td>
                                <a href="prdc-mng-update.php?updateid=' . $pno . 
                                '" style="background-color: rgb(0, 33, 91);
                                            padding:5px; color: 
                                            white; border: 1px solid black; 
                                            border-radious: 5px; text-decoration: none;
                                            ">Update</a>
                                <a href="prdc-mng-delete.php?deleteid=' . $pno . 
                                '" style="background-color: rgb(0, 33, 91);
                                            padding:5px; 
                                            color: white; 
                                            border: 1px solid black; 
                                            border-radious: 5px; text-decoration: none;
                                            ">Delete</a>
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