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
    <title>Display</title>
    <link rel="stylesheet" type="text/css" href="jigelindex.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

<style>
    img{
        width:200px;
    }
    </style>


</head>

<body>
    <h1 class="text-center my-4">User data</h1>
    <div class="container mt-5 d-flex justify-content-center">
    <table class="table table-bordered w-50">
  <thead class="table-dark">
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Image</th>
      <th scope="col">State</th>
      <th scope="col">District</th>
      <th scope="col">Pin</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sql="SELECT * FROM sellregister2";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $username=$row['username'];
        $email=$row['email'];
        $image=$row['image'];
        $state=$row['state'];
        $district=$row['district'];
        $pin=$row['pin'];
        echo '
        <tr>
        <td>'.$id.'</td>
        <td>'.$username.'</td>
        <td>'.$email.'</td>
        <td><img src='.$image.'></td>
        <td>'.$state.'</td>
        <td>'.$district.'</td>
        <td>'.$pin.'</td>
        </tr>';}

        ?>
   
   
  </tbody>
</table>
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