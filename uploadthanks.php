<?php
include('./connection.php');
  if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $image=$_FILES['image'];
    $state=$_POST['state'];
    $district=$_POST['district'];
    $pin=$_POST['pin'];

    
   
    $imagefilename=$image['name'];
    //print_r($imagefilename);
    //echo"<br>";
    $imagefilerror=$image['error'];
    //print_r($imagefilerror);
    //echo"<br>";
    $imagefiletemp=$image['tmp_name'];
    //print_r($imagefiletemp);
    //echo "<br>";

    $filename_separate=explode('.',$imagefilename);
    //print_r($filename_separate);
    //echo"<br>";
    $filename_extension=strtolower(end($filename_separate));
    //print_r($filename_extension);

    $extension=array('jpeg','jpg','png');
    
    if (in_array($filename_extension, $extension)) {
        $upload_image = 'image/' . $imagefilename;
        move_uploaded_file($imagefiletemp, $upload_image);
    
        $sql = "INSERT INTO sellregister2 (username, mobile, email, 
        image,state, district, pin) VALUES ('$username', '$mobile', '$email', 
         '$upload_image', '$state', '$district', '$pin')";
    
        $result = mysqli_query($con,$sql);
    
        if ($result) {
            header('Location:index.php'); // Change to the appropriate URL
    exit;
}
         else {
            die(mysqli_error($con));
        }
    }    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="uploadthankscss.css">
  <style>
  .success-message {
  text-align: center;
  opacity: 0;
  transform: translateY(20px);
  transition: opacity 0.5s, transform 0.5s;
  color:white;
}

.success-message.show {
  opacity: 1;
  transform: translateY(0);
  transition: opacity 0.5s, transform 0.5s;
  animation: bounce 0.5s ease-in-out;
}

@keyframes bounce {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px);
  }
}
</style>
</head>
<body>
<br><br><br>
<center><h1 style="color:white; -webkit-text-stroke: 2px orange;
  text-stroke: 2px red;"> well done! you have succesfully uploaded data</h1>
<h3 style="color:white">To view the data you have uploaded just click on the above link</h2>
  <a href="display.php">data</a>
  <div class="pyro">
  <div class="before"> </div>
  <div class="after"></div>
</div>
</center>
</body>
</html>