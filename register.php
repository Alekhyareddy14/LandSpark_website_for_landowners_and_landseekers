<?php
session_start();
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = $_POST['uname'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];

    if (!empty($user_name) && !empty($password) && !empty($repassword) && !empty($gender) && !empty($email)) {
        $query = "INSERT INTO own (uname, password, repassword, gender, email)
                  VALUES ('$user_name', '$password', '$repassword', '$gender', '$email')";

        if (mysqli_query($con, $query)) {
            echo "<script type='text/javascript'>alert('Successfully registered')</script>";
        } else {
            echo "<script type='text/javascript'>alert('Not successfully registered')</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Please fill in all fields')</script>";
    }
}
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="jigel.css">
    <style>
    .register-link {
            color: #ffcc00;
            background: #8A2BE2;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        .register-link:hover {
            background: #9400D3;
        }
        </style>
</head>
<body><br><br><br><br><br><br><br>
    <center>
        <h2 style="font-size: 3em;
        margin: 10px;
        color: #ffcc00; 
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
        font-weight: bold;">User Registration</h2>
        <form method="POST" autocomplete="off">
            <label for="username">Username:</label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" id="username" name="uname" required><br><br>
    
            <label for="password">Password:</label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="password" id="password" name="password" required autocomplete="off"><br><br>
            
            <label style="margin-right: 30px;">Re-enter password:</label>
            <input type="password" id="password" name="repassword"style="margin-right: 50px;" required autocomplete="off"><br><br>
            
            <label for="gender">Gender:</label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="gender" required><br><br>
            
            <label for="email">Email:</label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="email" id="email" name="email" required ><br><br>
            
            <input type="submit"name="submit" style="background-color: violet;
         color: white; 
        padding: 10px 20px; border: none; cursor: pointer;">
            <p style="color: skyblue">Already have an account? Login here</p>
            <a class="register-link" href="login.php">Login here</a>
            
            <div class='light x1'></div>
            <div class='light x2'></div>
            <div class='light x3'></div>
            <div class='light x4'></div>
            <div class='light x5'></div>
            <div class='light x6'></div>
            <div class='light x7'></div>
            <div class='light x8'></div>
            <div class='light x9'></div>
        </form>
    </center>
</body>
</html>