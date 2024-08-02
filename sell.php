<?php
session_start();
if (!isset($_SESSION['user_authenticated'])) {

    header("Location: index.php"); 
    exit();
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"href="rentstyle.css">
    <title>SELL</title>
</head>
<body >
    <br><br><br><br><br><br><br>
    <form action="index.php" method="post">
        
    </form>
</body>
</html>
