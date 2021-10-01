<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

$con = mysqli_connect($servername,$username,$password,$dbname);

if($con){
    echo "Connection succesful";
}else{
    echo "No connection".mysqli_connection_error();
}

error_reporting(0);

if($_GET['submit'])
{
$id = $_GET['id'];
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$email = $_GET['email'];
$gender = $_GET['gender'];
$phoneCode = $_GET['phoneCode'];
$phone = $_GET['phone'];
$password = $_GET['password'];

$query = "INSERT INTO userinfo VALUES('$id','$firstname','$lastname','$email','$gender','$phoneCode','$phone','$password') ";

$data=mysqli_query($con,$query);

header("Location:login.html");
}
?>