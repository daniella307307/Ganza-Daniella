<?php
$con=new mysqli('localhost','root','','student');
if($con){
    // echo "connection successfull <br>";
}else{
    die(mysqli_error($con));
}
?>