<?php 

include("config.php"); ?>

<link rel="stylesheet" type="text/css" href="css/message.css" media="all">
<link href="bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">
<link type="text/css" href="themes/base/jquery.ui.all.css" rel="stylesheet" />

<script type="text/javascript" src="javascript/validation.js"></script>
<style type="text/css">
input[type="text"]
{
	height:30px; !important
}
input[type="password"]
{
	height:30px; !important
}
input[type="submit"]
{
	height:30px; !important
}

</style>

<div class="main">
<div id="wrap">   
		  
<?php
		
	    include("menu.php");
?>
			<link rel="stylesheet" href="css/template.css" type="text/css">
			<link rel="stylesheet" href="css/constant.css" type="text/css">
			<div id="content">
			<div class="div2">

       			 <form action="chkforgot.php" method="post"  enctype="multipart/form-data" name="form1">
				             
          		 <h1> Add &nbsp; User &nbsp; Details </h1>
				 <table width="100%" border="0" align="center">
				 		<br>
						 <tr>
							 <td width="211" align="right" bgcolor="#FFFFFF">
						  		<span class="style3">Username: 
						 		</span>
							</td>
							 <td align="left" bgcolor="#FFFFFF">
							 	<span class="style3">
							 		<label>
										<input type="text" name="user"  id="user" > 
											<script type="text/javascript">
												var f1 = new LiveValidation('user');
												f1.add(Validate.Presence,{failureMessage: "Please enter user name"});				   
											</script>
										</input>
									</label>
						  		</span>
						 	 </td>
						</tr>
						 <tr bgcolor="#999999">
							 <td align="right" bgcolor="#FFFFFF">
								<span class="style3">Security Question: 
								</span>
							 </td>
							 <td align="left" bgcolor="#FFFFFF">
							 	<span class="style3">
									<label>
										<input type="text" id="question" name="question" />		
											<script type="text/javascript">
												var f1 = new LiveValidation('question');
												f1.add(Validate.Presence,{failureMessage: "\n It cannot be empty"});
											</script>
									</label>
								</span>
							</td>
						</tr>
						 <tr bgcolor="#999999">
							 <td align="right" bgcolor="#FFFFFF">
								 <span class="style3">Ans: 
								 </span>
							 </td>
								 	<td align="left" bgcolor="#FFFFFF">
										<span class="style3">
									  		<label>
										  		<input type="text" name="answer" id="answer" />
											  		  <script type="text/javascript">
															var f1 = new LiveValidation('answer');
															f1.add(Validate.Presence,{failureMessage: "It cannot be empty"});
						   							  </script>	
											</label>
										</span>
									</td>
						</tr>
						 <tr bgcolor="#999999">
							<td align="right" bgcolor="#FFFFFF">
							   <span class="style3">Password:
							   </span>
							 </td>
								   <td align="left" bgcolor="#FFFFFF">
								   		<span class="style3">
											<label>
												 <input name="password"  type="password" id="password" size="24" />
												 <script type="text/javascript">
														var f1 = new LiveValidation('password');
												  	    f1.add(Validate.Presence,{failureMessage: " Please enter password"});				   
								   				 </script> 
											</label>               
									   </span>
								   </td>
						 </tr>
							<tr bgcolor="#993366">
								<td align="right" bgcolor="#FFFFFF">
								   <span class="style3">Re-Type Password:
								   </span>
								 </td>
						   		<td align="left" bgcolor="#FFFFFF">
									<span class="style3">              
										<label>
											<input name="rpassword"  type="password" id="rpassword" size="24" />
												<script type="text/javascript">
													var f1 = new LiveValidation('rpassword');
													f1.add(Validate.Presence,{failureMessage: " Please enter password"});
												</script>
										</label>                 
						   			</span>
								</td>
						</tr>
							<tr>
								<td></td>
							<td><input name="next" type="submit" class="header-button"  id="next" value="Update"/>
							</td>
						</tr>
					</table>		   
       			 </form> 
</div>
</div>
</p><div class="clear"></div>
	    <?php
	   include("footer1.php");
	   ?>
</div>
</div>