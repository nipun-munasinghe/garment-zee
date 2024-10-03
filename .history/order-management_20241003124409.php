<?php
    include 'config.php';
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
    <link rel="stylesheet" href="CSS/order-management.css">

    <script src="JS/order-management.js"> </script>
   
    <title>Order Management Page</title>
</head>
<body>
    <!-- link the header -->
    <?php include_once'header.php'; ?>
    
    <hr>
    <h1 id="h1Welcome">Welcome to Order Management Page</h1>
    <div class="updateForm">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="formDetails" onsubmit="return formCheck()">
            <fieldset>
                <div class="formContain">
                    <h2 class="omH">Update Order Details</h2><br>
                    <input type="text" id="orderID" placeholder="Order ID" name="Id"><br><br>
                    <input type="text" id="cName" placeholder="Customer Name" name="fName"><br><br>
                    <input type="text" id="amountOfOrder" placeholder="Amount Of The Order" name="amount"><br><br>
                    <input type="text" id="status" placeholder="Order Status" name="fStatus"><br><br><br>
                    <center><input type="submit" class="addBtn" value="ADD" name="add"></center>
                </div>
                
            </fieldset>    
        </form>
    </div>
    <br>
    <hr>
    <div class="orderDisplay">
        <table class="displayTable">
            <thead>
                <tr>
                    <th>Order Id</th>
                    <th>Customer Name</th>
                    <th>Amount Of The Order</th>
                    <th>Order Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sqlQuery="SELECT * FROM 'Orders';";
                    $result=mysqli_query($con, $sqlQuery);

                    if($result)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $oid = $row['Id'];
                            $oName = $row['fName'];
                            $oAmount = $row['amount'];
                            $oStatus = $row['fStatus'];

                            echo 
                            '<tr>
                            <td scope = "row">' . $oid . '</td>
                            <td>' . $oName . '</td>
                            <td>' . $oAmount . '</td>
                            <td>' . $oStatus . '</td>
                            
                            </tr>';

                        }
                    }
                ?>
            </tbody>

        <table>
    </div>
    <br><br><br>
    

    <hr>
    <!-- link the footer -->
    <?php include_once'footer.php'; ?>
    
</body>
</html>