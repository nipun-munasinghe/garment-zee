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
    <link rel="stylesheet" href="CSS/header.css">
    <title>Header - Garment Zee</title>
     
</head>
<body>
    <? php 'header.php' ?>
    <!-- Header -->
    <header class="container">
        <a href="#"><img class="logo" src="./Images/logo.png" alt="logo"></a>
        
        <!-- navigation bar -->
         <nav class="navbar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
        </nav>

        <!-- Sign up and Sign in buttons -->
        <div class="signupNsignin">
            <button class="signup-btn">Sign Up</button>
            <button class="signin-btn">Sign In</button>
        </div>
    </header>
    
</body>
</html>