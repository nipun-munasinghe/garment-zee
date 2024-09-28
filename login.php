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
        <form action="#" method="post">
        <fieldset>
            <div class="formContain">
                <h1 id="log">Login</h1>
                <br>
                <input type="text" id="username" placeholder="Username" required><br><br>
                <input type="password" id="password" placeholder="Password" required><br><br>
                <input type="checkbox" id="showPw" onclick="togglePassword()">Show Password
                <br><br><br>
                <center><input type="submit" class="loginBtn" value="Log in"></center>
            </div>
            <div class="clickReg">
                <p>Don't have an account? <a id="regLink" href="#">Register Now</a></p>
            </div>
        </fieldset>
        </form>
    </div>

</body>
</html>