<?php
session_start();
include("config.php");
$username  = $_POST['username'];
$password  = $_POST['password'];

$selectLoginQuery = "select * from mstr_login where username = '".$username."' and password = '".$password."' ";

$msg = base64_encode("Registered Successfully");  
$rs = mysqli_query($conn,$selectLoginQuery) or die(mysqli_error());
$c=mysqli_num_rows($rs);
$row = mysqli_fetch_array($rs);
if($c==1)
{
	$_SESSION['username'] = $username;
	$_SESSION['type'] = $row[type];
	$_SESSION['password'] = $password;	
	
	header("location:home.php?msg=$msg");
}
else
{
	header("location:index.php?msg=Sorry!...Invalid User");
}
?>