<?php
include("config.php");

$username = $_POST['user'];
$question = $_POST['question'];
$answer = $_POST['answer'];
$password = $_POST['password'];
$rpassword = $_POST['rpassword'];


$updateQuery = "update mstr_login set password='".$password."' where username='".$username."' ";

//echo $insertQuery;
$msg = base64_encode("Inserted Successfully");
$sql1 = "select * from mstr_login where username = '".$username."' " ;
    $result = mysqli_query($conn,$sql1) or die ("Couldn't execute query.");		
								  
  
	while($num=mysqli_fetch_array($result))
	{
		$q=$num['securityquestion'];
		//echo $q;
		$a=$num['answer'];
		//echo $a;
	}	
	
		if($question==$q && $answer==$a)
		{
			if(mysqli_query($conn,$updateQuery)) 
			 {
				header("location:index.php?msg=$msg");	  
			}
			else
			 {
				header("location:forgot.php?msg=Not Inserted");
	 		 }
		}
		 else
			 {
				echo "check security question and answer";
				
			  }

			
	
		
	
	

?>