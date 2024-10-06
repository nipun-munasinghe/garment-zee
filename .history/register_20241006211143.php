<?php
session_start();
require_once 'config.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confermPassword'];  // Correct spelling
    $user_type = $_POST['user_type']; // Default user type
    $acc_status = 'active'; // Account status

    // Validate the input
    if (!empty($username) && !empty($password) && $password === $confirm_password) {
        // Check if the username already exists
        $query = "SELECT * FROM `user_info` WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result) == 0) {
            $plain_password = $password;


            // Insert user into the database
            $query = "INSERT INTO `user_info` (username, first_name, last_name, email, phone, password, user_type, acc_status)
                      VALUES ('$username', '$first_name', '$last_name','$email', '$phone', '$plain_password', '$user_type', '$acc_status')";

            if (mysqli_query($connection, $query)) {
                header("Location: login.php");
                exit();  // Make sure to stop further execution
            } else {
                echo "Error: " . mysqli_error($connection);
            }
        } else {
            echo "Username already taken.";
        }
    } else {
        echo "Please fill out all fields correctly and make sure passwords match.";
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
</head>word

<body>
    <div id="registe-container">

        <fieldset>
            <form action="" method="post">
                <center>
                    <h1>Create your account</h1>
                </center>
                <table>
                    <tr>
                        <td>
                            Username
                        </td>
                        <td>
                            <input type="text" placeholder="Username" name="username"><br>
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
                            <input type="password" placeholder="Password" name="password">
                        </td>

                    </tr>
                    <tr>
                        <td>
                            Re-enter Password
                        </td>
                        <td>
                            <input type="password" placeholder="Confirm Password" name="confermPassword">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            User Type
                        </td>
                        <td>
                            <select name="user_type" id="user_type">
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                                <option value="manager">Manager</option>
                                <option value="other">Other</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <center>
                    <button id="registerBtn" name="submit">Register Now</button>
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