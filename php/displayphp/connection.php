<?php

$host="localhost";
$user="root";
$password="";
$db_name="job_portal";

$con= mysqli_connect($host,$user,$password,$db_name);

if(mysqli_connect_error()){
    die("failed to connect".mysqli_connect_error());
}
?>