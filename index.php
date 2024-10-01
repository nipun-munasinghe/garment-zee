<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Insert Poppins font family from google fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>

    <!-- link the style sheet -->
    <link rel="stylesheet" href="CSS/index.css">

    <title>Home page</title>
</head>
<body>
    <!-- Include the header file -->
    <?php include('header.php'); ?>
    <div class="background"></div>

    <div class="container">
        <h1>The Future of Textile & Garment Management System<br>is here...</h1>
        <p class="p1">Effortlessly manage your textile and garment operations<br>with cutting-edge solutions.<br>From inventory to orders,<br>streamline every step of your business<br>for increased efficiency and growth.</p>
        <button class="getStart" onclick='window.location.href="./register.php"'>Get Started</button>
    </div>

    <div class="newArrivals">
        <h1>New Arrivals</h1>
        <div class="product-container">
            <div class="product">
                <h3>T-shirt</h3>
                <img src="./Images/t-shirt.png" alt="product t-shirt">
                <p>This t-shirt is the latest one designed by Garment Zee</p>
            </div>

            <div class="product">
                <h3>T-shirt</h3>
                <img src="./Images/t-shirt.png" alt="product t-shirt">
                <p>This t-shirt is the latest one designed by Garment Zee</p>
            </div>

            <div class="product">
                <h3>T-shirt</h3>
                <img src="./Images/t-shirt.png" alt="product t-shirt">
                <p>This t-shirt is the latest one designed by Garment Zee</p>
            </div>
        </div>

        <div class="product-container">
            <div class="product">
                <h3>T-shirt</h3>
                <img src="./Images/t-shirt.png" alt="product t-shirt">
                <p>This t-shirt is the latest one designed by Garment Zee</p>
            </div>

            <div class="product">
                <h3>T-shirt</h3>
                <img src="./Images/t-shirt.png" alt="product t-shirt">
                <p>This t-shirt is the latest one designed by Garment Zee</p>
            </div>

            <div class="product">
                <h3>T-shirt</h3>
                <img src="./Images/t-shirt.png" alt="product t-shirt">
                <p>This t-shirt is the latest one designed by Garment Zee</p>
            </div>
        </div>
    </div>

    <hr>

    <!-- Include the footer -->
    <?php include('footer.php'); ?>
 
</body>
</html>