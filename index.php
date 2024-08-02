<?php
include('./operations.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
    <link rel="stylesheet" type="text/css" href="jigelindex.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <h1 class="text-center my-3" style="font-size: 3em; margin: 10px; color: #ffcc00; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); font-weight: bold;">Fill the data</h1>
    <div class="container d-flex justify-content-center">
        <form action="uploadthanks.php" method="post" class="w-50" enctype="multipart/form-data" autocomplete="off">
            <?php 
            inputFields("Username", "username","", "text");
            inputFields("Mobileno", "mobile","", "text");
            inputFields("email", "email","", "email");
            inputFields("image", "image","", "file");
            inputFields("State", "state","", "text");
            inputFields("District", "district","", "text");
            inputFields("Pin", "pin", "","text");
            echo "<br>";
            ?>
            <div class="container container-center">
                <button class="btn btn-primary" name="submit">Submit</button>
            </div>
        </form>
    </div>
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
