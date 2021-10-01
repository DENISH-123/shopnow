<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "add";

$con = mysqli_connect($servername,$username,$password,$dbname);

if($con){
    echo "Connection succesful";
}else{
    echo "No connection".mysqli_connection_error();
}

error_reporting(0);

if($_GET['submit'])
{
$flatno = $_GET['flatno'];
$street = $_GET['street'];
$address = $_GET['address'];
$landmark = $_GET['landmark'];
$city = $_GET['city'];
$state = $_GET['state'];
$zip = $_GET['zip'];
$cc = $_GET['cc'];

$query = "INSERT INTO addtocart VALUES('$flatno','$street','$address','$landmark','$city','$state','$zip','$cc') ";

$data=mysqli_query($con,$query);

header("Location:login.html");
}
?>