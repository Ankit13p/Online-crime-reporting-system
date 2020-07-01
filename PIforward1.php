<?php 
include("sessionHandler.php");
include("config.php"); 
//$fid=$_GET['fir_id'];

?>
<link rel="stylesheet" href="files/template.css" type="text/css">
<link rel="stylesheet" href="files/constant.css" type="text/css">
<style type="text/css">
<!--
.style3 {color: #000000}
.style15 {font-size: 18px}
.style16 {color: #FFFFFF}
-->
</style>
<div class="main">
<div id="wrap">   
<?php
	include("menu.php");
?>

			<link rel="stylesheet" href="css/template.css" type="text/css">
			<link rel="stylesheet" href="css/constant.css" type="text/css">
			<div id="content">
	
<?php
   include("sidebar.php");
?>

			<div class="div2">

        		<form action="mforwd.php" method="post" name="emailForm" id="emailForm" class="form-validate">
					<div class="contact_email">
					  
						<h1> Forwarding Message to the Officer</h1><br>
						</p>
			    	<table width="100%">
				 
				 		<tr>
                    		<td width="202" align="left"><br />
                      		<span class="style3">Missing id:</span>
                      		</label>
							</td>
                   			<td width="378"><span class="style3">
                				<?php
									$fid=$_GET['m_id'];
								 	 $firQuery = "select *from mstr_missingcitizens where missing_id = '".$fid."' ";
									  $rsfir = mysqli_query($conn,$firQuery);
									  while($record = mysqli_fetch_array($rsfir))
									  {
								?>
                       			<input type="text" name="fid" id="fid" value="<?php echo $record['missing_id']?>" />
                       			<?php }?>
                       			<script type="text/javascript">
								  //var f1 = new LiveValidation('officer');
								  //f1.add(Validate.Presence,{failureMessage: "Please enter officer name"});				   
								</script>
								</select>
                   			 </span>
							 </td>
                  		</tr>
                  		<tr>
                   			 <td width="202" align="left"><br />
                     		 <span class="style3">Police Officer Name:</span>
                     		 </label>
							 </td>
                   			 <td width="378"><span class="style3">
                     			 <select name="officer" class="list"  id="officer"  >
                      			  <option >-------select-------</option>						
                       			 <?php
									  $officerQuery = "select *from mstr_officer where username<> '".$_SESSION['username']."' ";
									  $rsOfficer = mysqli_query($conn,$officerQuery);
									  while($rowOfficer = mysqli_fetch_array($rsOfficer))
									  {
								  ?>
                      				  <option value="<?php echo $rowOfficer['username']?>"> <?php echo $rowOfficer['username']?></option>
                      			  <?php }?>
                        			<script type="text/javascript">
				        			  //var f1 = new LiveValidation('officer');
				        			  //f1.add(Validate.Presence,{failureMessage: "Please enter officer name"});				   
				       				</script>
                                    </select>
                    				</span>
								</td>
                  			</tr>
                  			<tr>
                   				<td align="left"><span class="style3">Enter your Message:</span>
								</td>
                    			<td>
                      				<textarea cols="50" rows="10" name="msg" id="msg" class="inputbox required" >
                    				</textarea>
								</td>
                  			</tr>
							<tr></tr>
                  			<tr>
                   				<td align="right">
								</td>
                    			<td>
                      				<p><button type="submit" class="button validate png style16">Send</button>
                       				</p>
					  			</td>
                  			</tr>
                </table>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
				<label for="contact_subject">&nbsp;
				</label>
			    	<span class="style15">
			    <label id="contact_textmsg" for="contact_text">&nbsp;
				</label>
			    	</span>
			    <p>
				<span class="style15">			      
				</span>
				<br>
			    <br>
			    </p>
			  </div>
        </form> 
</div>

</p><div class="clear"></div>
	    <?php
	   include("footer1.php");
	   ?>
</div>
</div>