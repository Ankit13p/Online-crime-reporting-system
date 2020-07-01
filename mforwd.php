<?php
include("sessionHandler.php");
include("config.php");
$fid=$_POST['fid'];
$Officer = $_POST['officer'];
$msgDescription = $_POST['msg'];


$insertFIRforward = "insert into missing_frwd (m_id,username,description,dt_time,frmofficer)
                     values ('".$fid."','".$_SESSION['username']."','".$msgDescription."',now(),
					 '".$Officer."')";
					 
$msg = base64_encode("Registered Successfully");

//echo 	$insertFIRforward;	


$updateQuery = "update mstr_missingcitizens set status = 1 where missing_id ='".$fid."' ";

	//echo $updateQuery;	 
if(mysqli_query($conn,$insertFIRforward) && mysqli_query($conn,$updateQuery))
   {
 	header("location:home.php?msg=$msg");
    }
else
{
	header("location:PIforward1.php?msg=Sorry!...Fill The Detail..");
}
?>



insert into missing_forwd(m_id,username,description,dt_time,frmofficer)
                     values ('".$fid."','".$_SESSION['username']."','".$msgDescription."',now(),
					 '".$Officer."')";