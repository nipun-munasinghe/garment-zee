<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
    
    <link rel="stylesheet" href="CSS/manager.css">

    <script src="JS/manager.js"></script>

    <title>Managerdashbord</title>
</head>
<body>
    <!-- include the header file -->
    <?php include('header.php'); ?>

    <div class="background-overlaya"></div>
    <div class="background-overlayb"></div>
    <div class="background-overlayc"></div>
<div class="container">
    <div class="hello">
        
            <h1>Hello <?php echo $_SESSION['first_name']; ?> !</h1>
        
        </div>
            </div>
<br>
 <!-- Add Or Remove Part -->
            <div class="addremove">
                <div class="removeborder">
                    <h2>Admin</h2>
                    <input type="text" placeholder="Admin Id :" required>
                    <button  type="submit" class="check">Check</button>
                    <p>Account status : Active</p>
                    <button class="active">Activate</button>
                    <button class="remove">Remove</button>
                </div>
                
                <div class="removeborder">
                    <h2>Employee</h2>
                    <input type="text" placeholder="Employee Id :" required>
                    <button type="submit" class="check">Check</button>
                    <p>Account status : Active</p>
                    <button class="active">Activate</button>
                    <button class="remove">Remove</button>
                </div>
            </div>
<br>
<br>
 <!-- New Add Part -->
            <div class="addpart">
                <div class="form">
                    <h2>Add Admin</h2>
                    <p>Name :</p>
                    <input type="text"   placeholder="Your name" required>
                    <p>Admin username :</p>
                    <input type="text"   placeholder="Admin Id" required>
                    <p>E mail :</p>
                    <input type="email"  placeholder="example@gmail.com" required>
                    <p>Phone Number 1 :</p>
                    <input type="number" placeholder="0xxxxxxxx" required>
                    <p>Phone Number 2 :</p>
                    <input type="number" placeholder="0xxxxxxxx">
                    <p>Address :</p>
                    <input type="text"  placeholder="Address of the admin" required>
                    <br>
                    <br>
                    <input type="submit" class="sbutton" placeholder="Add Admin">
                    <input type="reset"  class="rbutton"placeholder="Reset">
                </div>

                <div class="form">
                    <h2>Add Employee</h2>
                    <p>Name :</p>
                    <input type="text"   placeholder="Your name" required>
                    <p>Employee username :</p>
                    <input type="text"   placeholder="Admin Id" required>
                    <p>E mail :</p>
                    <input type="email"  placeholder="example@gmail.com" required>
                    <p>Phone Number :</p>
                    <input type="number" placeholder="0xxxxxxxx" required>
                    <p>Phone Number 2 :</p>
                    <input type="number" placeholder="0xxxxxxxx">
                    <p>Address :</p>
                    <input type="text"  placeholder="Address of the employee" required>
                    <br>
                    <br>
                    <input type="submit" class="sbutton" placeholder="Add Admin">
                    <input type="reset"  class="rbutton"placeholder="Reset">
                </div>
            </div>
<br>
            <div class="salarycal">
                    <h2>Employee Salary Calculation </h2>
                    <div class="separate-display">
                        <div class="salform">
                            <p>Employee username :</p>
                            <input type="text"   placeholder="Employee username" required>
                            <p>Working Days :</p>
                            <input type="number"   placeholder="Days" required>
                            <p>Working Hours :</p>
                            <input type="number" class="hoursa"   placeholder="Hours" required>
                            <p>Hour Rate :</p>
                            <input type="number" class="hoursa"   placeholder="Hour Rate" required>
                            <br>
                            <br>
                            <button class="scalculate">Calculate</button>
                        </div>

                        <div class="sal-display">
                            Salary:
                        </div>
                    </div>
            </div>

    <!-- include the footer file -->
    <?php include('footer.php'); ?>
</body>
</html>