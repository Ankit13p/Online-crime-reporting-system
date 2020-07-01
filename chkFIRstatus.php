<?php
session_start();
include("config.php");

$address =$_POST['address'];
$contactno = $_POST['contactno'];

$emailid= $_POST['emailid'];
$crimephoto1 =  "upload/".$_FILES['photo1']['name'];
$crimephoto2 =  "upload/".$_FILES['photo2']['name'];


if((move_uploaded_file($_FILES['photo1']['tmp_name'],$crimephoto1)) &&
   (move_uploaded_file($_FILES['photo2']['tmp_name'],$crimephoto2)))
   {
   										  
	  
	$insertQuery = "insert into mstr_profile(address,contact_no,emailid,)
											values('".$address."','".$contactno."','".$emailid."' )";
											
	$insertfirQuery="insert into fir_details(description,crimephoto1,crimephoto2)
											values('".$description."','".$crimephoto1."','".$crimephoto2."')";
											  
    //echo $insertQuery;
	//echo $insertloginQuery;
	$msg = base64_encode("Updated Successfully");
	
	if((mysqli_query($conn,$insertQuery)) && (mysqli_query($conn,$insertfirQuery)))
	  {
	   		header("location:home.php?msg=$msg");	  
	   }
	else
	 {
		header("location:editFIRdetail.php?msg=Not Updated");
	  }
   }
  else
  {
    echo "Error in uploading photo";
   }
 }  

?>