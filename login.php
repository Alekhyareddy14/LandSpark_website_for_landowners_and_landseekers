<?php
include('./db.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = $_POST['uname'];
    $password = $_POST['password'];

    $query = "SELECT * FROM own WHERE uname='$user_name'
     AND password='$password'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        // User exists, redirect to the desired page
        $_SESSION['uname'] = $user_name;
        header("Location: second.php");
        die();
    } else {
        echo "<script type='text/javascript'>
        alert('Wrong username or password')</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Login</title>
  <style>
  body {
      margin: 0;
      height: 100vh;
      font-weight: 100;
      background: radial-gradient(#a23982, #1f1013);
      overflow-y: hidden;
    }
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
  <link rel="stylesheet" type="text/css" href="jigel.css">
</head>
<body>
  <br><br><br><br><br><br><br><br><br>
  <center>
    
        <h2 style="font-size: 3em;
    margin: 10px;
    color: #ffcc00; 
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
    font-weight: bold; 
">User Login</h2>
        <form method="POST" autocomplete="off">
        <label for="username">Username:</label>
        <input type="text" id="username" name="uname" required 
       autocomplete= "new-username">
       <input type="hidden" autocomplete="new-username"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" 
        required autocomplete= "new-password">
       <input type="hidden" autocomplete="new-password"><br><br>

        <input type="submit"name="submit" style="background-color: violet;
         color: white; 
        padding: 10px 20px; border: none; cursor: pointer;">
        <p style="color:skyblue">Don't have an account?
         Register here</p>
         <a class="register-link" href="register.php">Register here</a>

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
