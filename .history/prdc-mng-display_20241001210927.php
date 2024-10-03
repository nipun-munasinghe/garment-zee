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
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * From `product-mamagment`;";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $pid = $row['id'];
                        $pname = $row['pname'];
                        $pqty = $row['pqty'];
                        $pprice = $row['pprice'];

                        echo '<tr>
                            <th scope="row">' . $pid . '</th>
                            <td>' . $pname . '</td>
                            <td>' . $pqty . '</td>
                            <td>' . $pprice . '</td>
                            <td>
                                <a href="prdc-mng-update.php?updateid=' . $pid . '" style="background-color: blue color: black; border: 1px solid black;">Update</a>
                                <a href="prdc-mng-delete.php?deleteid=' . $pid . '">Delete</a>"
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