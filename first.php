<!DOCTYPE html>
<html>
<head>
    <title>LANDSPARK</title>
    <link rel="stylesheet" type="text/css" href="jigelfirst.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Raleway', sans-serif;
            background-color: #000;
        }

        .text-container {
            margin-top:-5%;
            height: 100vh;
            width: 100vw;
            display: flex;
            flex-direction : column;
            justify-content: center;
            align-items: center;
        }

        .text-container h1 {
            margin :0;
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
            text-align:bottom;
            margin-top: 20px;
        }

        .options-summary p {
            font-size: 24px;
            color: #fff;
        }
        
    </style>
</head>

<body>
    <div class="text-container">
        <h1 >LANDSPARK</h1>
    
    <br><br>
    
    <center>
    <a href="rent.php" style="text-decoration: none; 
    display: inline-block; margin: 10px; padding: 5px 10px;
     background-color: #551a8b; color: #fff; border-radius: 5px; 
     text-align: center; transition: background-color 0.3s;" 
     onmouseover="this.style.backgroundColor='#ff6666'" 
     onmouseout="this.style.backgroundColor='#551a8b'">
  <h2>RENT LAND</h2>
</a>

<a href="sell.php" style="text-decoration: none; 
display: inline-block; margin: 10px; padding: 5px 10px; 
background-color: #551a8b; color: #fff; border-radius: 5px;
 text-align: center; transition: background-color 0.3s;" 
 onmouseover="this.style.backgroundColor='#ff6666'"
  onmouseout="this.style.backgroundColor='#551a8b'">
  <h2>SELL LAND</h2>
</a>

<a href="ABOUT.php" style="text-decoration: none; 
display: inline-block; margin: 10px; padding: 5px 32px; 
background-color: #551a8b; color: #fff; border-radius: 5px;
 text-align: center; transition: background-color 0.3s;" 
 onmouseover="this.style.backgroundColor='#ff6666'" 
 onmouseout="this.style.backgroundColor='#551a8b'">
  <h2>ABOUT</h2>
</a>

    </div>
    </center>
    <div class='light x1'></div>
    <div class='light x2'></div>
    <div class='light x3'></div>
    <div class='light x4'></div>
    <div class='light x5'></div>
    <div class='light x6'></div>
    <div class='light x7'></div>
    <div class='light x8'></div>
    <div class='light x9'></div>
</body>
</html>
