if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
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
            <form action="">
            <center><h1>Create your account</h1></center>
                <table>
                    <tr>
                        <td>
                            Fisrts Name
                        </td>
                        <td>
                            <input type="text" placeholder="Your first name"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Last Name
                        </td>
                        <td>
                            <input type="text" placeholder="Your last name"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email
                        </td>
                        <td>
                            <input type="email" placeholder="example@gmail.com" id="email">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Phone Number
                        </td>
                        <td>
                            <input type="text" placeholder="+94xxxxxxxxx" id="phone">
                        </td>

                    </tr>
                    <tr>
                        <td>
                            Password
                        </td>
                        <td>
                            <input type="text" placeholder="Password">
                        </td>

                    </tr>
                    <tr>
                        <td>
                            Re-enter Password
                        </td>
                        <td>
                            <input type="text" placeholder="Confirm Password">
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