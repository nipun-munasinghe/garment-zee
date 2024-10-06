<?php

    session_start();

    include("config.php");
    include("functions.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user_info WHERE username = '$username' AND password = '$password' Limit 1";
        $result = mysqli_query($connection, $sql);

        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $hashed_password = $row['password'];

            if (password_verify($password, $hashed_password)) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            $_SESSION['user_type'] = $row['user_type'];

            if($row['acc_status'] == 'active') {
                if ( $_SESSION['user_type'] == 'user'){
                    header('Location: customer.php');
                }

                else if ( $_SESSION['user_type'] == 'admin'){
                    header('Location: admin-panel.php');
                }

                else if ( $_SESSION['user_type'] == 'manager'){
                    header('Location: managerdash.php');
                }

                else {
                    header('Location: employee.php');
                }
                exit();
            }else{
                echo "Account"
            }
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "Username not found.";
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
    <link rel="stylesheet" href="CSS/login.css">

    <!-- link the java script file -->
    <script src="JS/login.js"> </script>

    <title>Sign In</title>
</head>
<body>
    <div class="formOut">
        <form action="login.php" method="post">
        <fieldset>
            <div class="formContain">
                <h1 id="log">Login</h1>
                <br>
                <input type="text" name="username" id="username" placeholder="Username" required><br><br>
                <input type="password" name="password" id="password" placeholder="Password" required><br><br>
                <input type="checkbox" id="showPw" onclick="togglePassword()">Show Password
                <br><br><br>
                <center><input type="submit" name="submit" class="loginBtn" value="Log in"></center>
            </div>
            <div class="clickReg">
                <p>Don't have an account? <a id="regLink" href="register.php">Register Now</a></p>
            </div>
        </fieldset>
        </form>
    </div>
</body>
</html>