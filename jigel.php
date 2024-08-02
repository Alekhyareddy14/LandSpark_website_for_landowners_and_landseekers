<!DOCTYPE html>
<html>
<head>
  <link href="jigel.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="jigelfirst.css">
  <style>
    body {
      margin: 0;
      height: 100vh;
      font-weight: 100;
      background: radial-gradient(#a23982, #1f1013);
      overflow-y: hidden;
      font-family: 'Raleway', sans-serif;
      background-color: #000;
    }
    p {
            font-size: 1.2em;
            line-height: 1.6;
        }

    .text-container {
      height: 100vh;
      width: 100vw;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .text-container h1 {
      margin: 0;
      font-size: 100px;
      color: rgba(225, 225, 225, .01);
      background-image: url("jig.webp");
      background-repeat: repeat;
      -webkit-background-clip: text;
      animation: animate 15s ease-in-out infinite;
      text-align: center;
      text-transform: uppercase;
      font-weight: 900;
    }

    a.link-button {
      text-decoration: none;
      display: inline-block;
      margin: 10px;
      padding: 5px 15px;
      background-color: #551a8b;
      color: #fff;
      border-radius: 5px;
      text-align: center;
      transition: background-color 0.3s;
    }

    a.link-button:hover {
      background-color: #ff6666;
    }

    @keyframes animate {
      0%, 50% {
        background-position: left top;
      }
      15% {
        background-position: right bottom;
      }
      20% {
        background-position: left bottom;
      }
      15% {
        background-position: right top;
      }
    }

    .options-summary {
      text-align: bottom;
      margin-top: 20px;
    }

    .options-summary p {
      font-size: 24px;
      color: #fff;
    }
    nav {
      background-color:black; /* Background color for the menu */
      padding: 10px 0; /* Add padding for spacing */
    }

    nav ul {
      list-style: none; /* Remove bullet points for list items */
      margin: 0;
      padding: 0;
      display: flex; /* Display the menu items in a horizontal line */
      justify-content: center; /* Center the items horizontally */
    }

    nav li {
      margin: 0 15px; /* Add spacing between menu items */
    }

    nav a {
      text-decoration: none;
      color: #fff; /* Text color for menu items */
      font-weight: 600; /* Add font weight for emphasis */
    }

    /* Style for the menu items on hover */
    nav a:hover {
      color: #ff6666; /* Text color on hover */
    }
  </style>
</head>
<body>
<div>
  <nav>
    <ul>
      <li><a href="JIGEL.php">Home</a></li>
      <li><a href="login.php">Sell</a></li>
      <li><a href="login.php">Rent</a></li>
      <li><a href="ABOUT.php">About</a></li>
      <li><a href="login.php">login</a></li>
      <li><a href="register.php">Register</a></li>
     
      
    </ul>
  </nav>
  </div>
<br><br><br><br><br><br><br>


  <div class="text-container">
  <img src="logor1.png" height="60%" width="30%" style="margin-top: -30%;">
 <br><br>
    <h1 style="margin-top:-15%">LANDSPARK</h1>
    <div class="website-info" style="color: white; text-align: center;">
    <p>
      Welcome to LandSpark! Explore a world of land opportunities 
      and unlock your<br> potential. To access LandSpark and embark on your 
      journey to success,<br> please log in and start your land-related adventures today.
    </p>
  </div>

   <!-- <p id='head1' class='header'>Explore</p>
    <p id='head2' class='header'>Vast</p>
    <p id='head3' class='header'>Terrains</p>
    <p id='head4' class='header'>Unlocking Opportunities, Empowering Dreams</p>
    <p id='head5' class='header'>Welcome to Landspark</p>-->
    <div class='light x1'></div>
    <div class='light x2'></div>
    <div class='light x3'></div>
    <div class='light x4'></div>
    <div class='light x5'></div>
    <div class='light x6'></div>
    <div class='light x7'></div>
    <div class='light x8'></div>
    <div class='light x9'></div>
  </div>
</body>
</html>
