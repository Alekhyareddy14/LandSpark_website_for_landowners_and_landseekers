<?php
$con=mysqli_connect('localhost','root','','sellregister2');
if($con){
       echo "success";
}
       else{
       die(mysqli_error($con));
}


?>
