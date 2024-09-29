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
    <link rel="stylesheet" href="CSS/order-management.css">
   
    <title>Order Management Page</title>
</head>
<body>
    <!-- link the header -->
    <?php include_once'header.php'; ?>
    
    <hr>
    <h1 id="h1Welcome">Welcome to Order Management Page</h1>
    <div class="updateForm">
        <form action="#" method="post">
            <fieldset>
                <div class="formContain">
                    <h2 class="omH">Update Order Details</h2><br>
                    <input type="text" id="orderID" placeholder="Order ID" required><br><br>
                    <input type="text" id="cName" placeholder="Customer Name" required><br><br>
                    <input type="text" id="amountOfOrder" placeholder="Amount Of The Order" required><br><br>
                    <input type="text" id="status" placeholder="Order Status" required><br><br><br>
                    <center><input type="submit" class="addBtn" value="ADD"></center>
                </div>
                
            </fieldset>    
        </form>
    </div>
    <br>
    <hr>
    <br><br><br>
    <div id="prdc-display">
        <table id="table">
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql="SELECT * From `product-mamagment`;";
                    $result=mysqli_query($con, $sql);
                    if($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $pid = $row['id'];
                            $pname = $row['pname'];
                            $pqty = $row['pqty'];
                            $pprice = $row['pprice'];

                            echo '<tr>
                            <th scope="row">'. $pid . '</th>
                            <td>' . $pname . '</td>
                            <td>' . $pqty . '</td>
                            <td>' . $pprice . '</td>
                            <td>
                                <a href="prdc-mng-update.php?updateid='.$pid.'" style="background-color: blue color: black; border: 1px solid black;">Update</a>
                                <a href="prdc-mng-delete.php?deleteid='.$pid.'">Delete</a>"
                            </td>
                            </tr>';
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>

    <hr>
    <!-- link the footer -->
    <?php include_once'footer.php'; ?>
    
</body>
</html>