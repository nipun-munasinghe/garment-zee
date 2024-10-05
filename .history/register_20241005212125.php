<?php

include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['Username']
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password == $confirm_password) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    $sql = "INSERT INTO `user_info`(first_name, last_name, Email, Phone, password,) 
            VALUES ('$username', '$lastname','$email','$phone', '$hashed_password');";

    $result = mysqli_query($connection, $sql);
    if ($result) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
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
    <link rel="stylesheet" href="CSS/register.css">

    <title>Sign Up</title>
</head>

<body>
    <div id="registe-container">
        
        <fieldset>
            <form action="" method="post">
            <center><h1>Create your account</h1></center>
                <table>
                    <tr>
                        <td>
                            Username
                        </td>
                        <td>
                            <input type="text" placeholder="Username" name="Username"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Fisrts Name
                        </td>
                        <td>
                            <input type="text" placeholder="Your first name" name="firstName"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Last Name
                        </td>
                        <td>
                            <input type="text" placeholder="Your last name" name="lastname"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email
                        </td>
                        <td>
                            <input type="email" placeholder="example@gmail.com" id="email" name="email">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Phone Number
                        </td>
                        <td>
                            <input type="text" placeholder="+94xxxxxxxxx" id="phone" name="phone">
                        </td>

                    </tr>
                    <tr>
                        <td>
                            Password
                        </td>
                        <td>
                            <input type="text" placeholder="Password" name="password">
                        </td>

                    </tr>
                    <tr>
                        <td>
                            Re-enter Password
                        </td>
                        <td>
                            <input type="text" placeholder="Confirm Password" name="confermPassword">
                        </td>
                    </tr>
                </table>
                <center>
                    <button id="registerBtn">Register Now</button>
                </center>

                <div class="clickLogin">
                    <p>Do you have an account? <a id="clickLogin" href="login.php">Sign In</a></p>
                </div>
            </form>
        </fieldset>
    </div>
    <br><br>
</body>
</html>