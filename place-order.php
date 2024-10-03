<?php
    session_start();

    
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
    <link rel="stylesheet" href="CSS/place-order.css">

    <!-- link the java script file -->
    <script src="JS/place-order.js"> </script>

    <title>Place an order</title>
</head>
<body>
    <div class="container">
        <!-- contact details -->
        <div class="contact">
            <h1>Place your order</h1>
            <h3>Call</h3>
            <p>+94 11 454 6464</p>
            <h3>Email</h3>
            <p>garmentzee@gmail.com</p>
            <h3>Address</h3>
            <p>Garment Zee, Kaduwela, Malabe</p>
        </div>
    
        <!-- place order details input form -->
        <from action="#" method="post">
            <div class="details">
                <label for="name">Name</label>
                <br>
                <input type="text" id="customer-name" placeholder="Your name" required>
                <br>
                <div class="left-right">
                    <div class="form-left">
                        <label for="tel">Phone number</label>
                        <br>
                        <input type="tel" id="tel" placeholder="Your phone number" required>
                        <br>
                        <label for="quantity">Quantity</label>
                        <br>
                        <input type="number" id="qty" name="quantity" min="1" required>
                    </div>

                    <div class="form-right">
                        <label for="email">Email</label>
                        <br>
                        <input type="email" id="mail" placeholder="Your email">
                        <br>
                        <label for="price">Price (Rs. )</label>
                        <br>
                        <input type="number" id="price" name="price" value='' disabled></input>
                    </div>
                </div>

                <label for="address">Address</label>
                <br>
                <textarea name="address" id="address" required></textarea>
                <br>
                <label for="myfile">Upload your payment recipt</label>
                <br>
                <input type="file" id="myfile" name="myfile">
                <br> <br> <br>
                
                <!-- place order button -->
                <center>
                    <button type='submit' name="placeorder" id="place-btn" onclick="place()">Place order</button>
                </center>
            </div>
        </form>
    </div>
    
</body>
</html>