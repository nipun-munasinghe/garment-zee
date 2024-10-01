<?php 
    session_start();

    require_once 'config.php';

    if(isset($_POST['changeBtn'])) {
        $sql = "SELECT password FROM user_info WHERE username = '" . $_SESSION['username'] . "' ";
        $result = mysqli_query($connection, $sql);

        if($result) {
            $row = mysqli_fetch_assoc($result);

            $password = $row['password'];

            if($password == $_POST['current-pwd']) {
                $newPassword = $_POST['new-pwd'];

                $sql = "UPDATE user_info SET password ='$newPassword' WHERE username = '" . $_SESSION['username']. "' ";
                $result = mysqli_query($connection, $sql);

                if($result) {
                    echo "<script>
                          alert('Your password is changed successfully!');
                          </script>";
                }
            }
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
    <link rel="stylesheet" href="CSS/customer.css">

    <!-- link the JS file -->
     <script src="JS/customer.js"></script>

    <title>Customer profile</title>
</head>
<body>
    <!-- include the header file -->
    <?php include('header.php'); ?>
    
    <h1>Hello <?php echo $_SESSION['first_name']; ?> !</h1>

    <div class="banner">
        <img src="./Images/customer-banner.png" alt="products banner">
        <button>Buy Products</button>
    </div> <hr>

    <form action="customer.php" method="POST">
        <div class="settings">
            <h2>Password Settings</h2>
            
            <div class="form-grp">
                <div class="texts">
                    <label for="current-pwd"> Enter current password:</label>
                    <br>
                    <label for="new-pwd"> Enter new Password:</label>
                    <br>
                    <label for="confirm-pwd"> Confirm new Password:</label>
                </div>
                
                <div class="inputs">
                    <input type="password" id="current-pwd" name="current-pwd">
                    <br>
                    <input type="password" id="new-pwd" name="new-pwd">
                    <br>
                    <input type="password" id="confirm-pwd" name="confirm-pwd">
                </div>
            </div>

            <div class="btns">
                <button id="delete-btn" name="delBtn" type="submit" onclick="del()">Delete Account</button>
                <button id="change-btn" name="changeBtn" type="submit" onclick="change()">Change Password</button>
            </div>
        </div>
</form>
    
    <!-- include the footer file -->
    <?php include('footer.php'); ?>
</body>
</html>