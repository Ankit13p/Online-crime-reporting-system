<!--left-->
<style>
.sidebar{
padding-top:20px; !important
}
.sidebar a{
text-decoration:none;
font-weight:normal;

}

</style>
	<div class="div1">
	<h1> Menu</h1>
<div class="sidebar">


	
	  <?php
	   if(isset($_SESSION['type'])&& $_SESSION['type'] == "Admin")
	   {?>
			 <li class="item2"><a href="viewarea.php"><span>View Area</span></a></li></br>
			 <li class="item2"><a href="viewcity.php"><span>View City</span></a></li></br>
			 <li class="item2"><a href="viewdesignation.php"><span>View Designation</span></a></li></br>
			 <li class="item2"><a href="viewcrimetype.php"><span>Different Type of Crime </span></a></li></br>
			 <li class="item2"><a href="viewpolice.php"><span>Police Station Details </span></a></li></br>
			 <li class="item59"><a href="viewofficer.php">Officer Details</a></li></br>
			 <li class="item63"><a href="viewfiradmin.php"><span>View FIR details </span></a></li></br>
			 <li class="item63"><a href="viewforward.php"><span> View Forward details </span></a></li></br>
			 <li class="item60"><a href="manage_alluserprofile.php">Profiles of Users </a></li></br>
			 
			 <li class="item62"><a href="manage_missingcitizens.php"><span>All Missing Citizens</span></a></li><br />
			 <li class="item63"><a href="logout.php"><span>Logout </span></a></li> </br>
		<?php }?>
	
	   <?php 
	      if($_SESSION['type'] == "Police Officer")
	      {?>
		  
		  	<li class="item63"><a href="viewfir.php"><span>View FIR details </span></a></li></br>
		   	<li class="item63"><a href="viewforward.php"><span> View Forward details </span></a></li></br>
			<li class="item63"><a href="statusmissing.php"><span> Update Fir status</span></a></li> </br>
		    <li class="item63"><a href="manage_missingcitizens1.php"><span>View Missing FIR details </span></a></li></br>
		  	<li class="item63"><a href="viewprofile1.php"><span>Edit Your Profile </span></a></li></br>
		  <li class="item63"><a href="logout.php"><span>Logout </span></a></li> </br>
		 <!-- <li class="item63"><a href=""><span> </span></a></li>-->
	          
	    
		<?php }?>      

	<?php 
	      if($_SESSION['type'] == "User")
	      {?>
	  
			  <li class="item63"><a href="FIRreg1.php"><span>Register Your FIR  </span></a></li></br>
	 		  <li class="item63"><a href="editFIRdetail.php"><span>Edit Your FIR details </span></a></li></br>
			  <li class="item63"><a href="missing_person.php"><span>Fir For Missing Citizens </span></a></li> </br>
		 	  <li class="item63"><a href="viewmissing_citizen.php"><span>Missing Citizens </span></a></li> </br>
			  <li class="item63"><a href="viewprofile1.php"><span>Edit Your Profile </span></a></li> </br>
	    	  <li class="item63"><a href="statusmissing.php"><span>Track your Fir </span></a></li> </br>
			  <li class="item63"><a href="logout.php"><span>Logout </span></a></li> </br>

		<?php }?>
	
	</ul>
	</div>
	</div>
    	