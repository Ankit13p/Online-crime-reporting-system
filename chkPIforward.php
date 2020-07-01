<?php
include("sessionHandler.php");
include("config.php");
$fid=$_POST['fid'];
$Officer = $_POST['officer'];
$msgDescription = $_POST['msg'];


$insertFIRforward = "insert into fir_forward (F_id,username,description,dt_time,frmofficer)
                     values ('".$fid."','".$_SESSION['username']."','".$msgDescription."',now(),
					 '".$Officer."')";
					 
$msg = base64_encode("Registered Successfully");

//echo 	$insertFIRforward;	


$updateQuery = "update fir_details set status = 1 where reg_id ='".$fid."' ";

	//echo $updateQuery;	 
if(mysqli_query($conn,$insertFIRforward) && mysqli_query($conn,$updateQuery))
   {
 	header("location:home.php?msg=$msg");
    }
else
{
	header("location:PIforward.php?msg=Sorry!...Fill The Detail..");
}
?>