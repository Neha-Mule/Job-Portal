<?php
include('connection.php');
$email=$_POST['email'];
$password=$_POST['password'];


$email=stripslashes($email);
$password=stripslashes($password);

$sql="SELECT * FROM `admin` WHERE email='$email' AND password='$password'";
$results=mysqli_query($con,$sql);
$row=mysqli_fetch_row($results);
$count=mysqli_num_rows($results);

if($count==1){

//  echo'successful';
header("location:\php\admin_main.php");
}
else{
    echo'fail';
}