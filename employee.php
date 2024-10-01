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
    <link rel="stylesheet" href="CSS/employee.css">

    <title>Employee profile</title>
</head>
<body>
    <!-- include the header file -->
    <?php include('header.php'); ?>

    <div class="container">
    <!-- Profile Section -->
        <div class="profile">
            <h2>Employee Profile</h2><br>
            <p><b>Name <span class = "icon"> : </span></b> Renuka Watawala</p>
            <p><b>Working Days <span class = "icon"> : </span></b> 20 days/month</p>
            <p><b>Working Hours <span class = "icon"> : </span></b> 8 hours/day</p>
            <p><b>Hour Rate <span class = "icon"> : </span></b> 120 Rs./hour</p>
            <p><b>salary <span class = "icon"> : </span></b> 45,000/=</p><br>
        </div>

        <!-- Passowrd Settings Section -->
        <div class="settings">
            <h2>Password Settings</h2>
            <form action="#">
                <label for="current-password">Current Password:</label>
                <input type="password" name="current-password" id="current-password" placeholder="Enter current password">
                
                <label for="new-password">New Password:</label>
                <input type="password" name="new-password" id="new-password" placeholder="Enter new password">
                
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm new password"><br>
                
                <center>
                    <button type="submit" class="btn-change">Change Password</button><br><br>
                    <button type="button" class="btn-delete">Delete Account</button>
                </center>
            </form>
        </div>
    </div>
<hr>
    <!-- include the footer file -->
    <?php include('footer.php'); ?>
</body>
</html>