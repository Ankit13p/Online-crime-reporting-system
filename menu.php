<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style>
@font-face{
font-family: "bebas";
  src: url('fonts/BEBAS___-webfont.eot');
  src: url('fonts/BEBAS___-webfont.eot?#iefix') format('eot'), 
  url('fonts/BEBAS___-webfont.woff') format('woff'), 
  url('fonts/BEBAS___-webfont.ttf') format('truetype'), 
  url('fonts/BEBAS___-webfont.svg#FontAwesome') format('svg');
  font-weight: normal;
  font-style: normal;

}
.clear { clear: both; }
.menu{
width:1170px;
margin:auto;
padding:10px 0px 10px 0px;
}
.menu-nav-r{
float:right;
padding:0px 0px 10px;
}


.menu-nav-r li	{
margin:0 0 0 0 !important;
	float:left;
	padding:0px 5px 0px 10px;
	font-family:Museo_slab, Helvetica, sans-serif;
	text-decoration:none;
	list-style:none;
	}
.menu-nav-r li a  {
	padding:05px 10px 0px 0px;
	float:left;
	font-family:Museo_slab, Helvetica, sans-serif;
	text-decoration:none;
	color:#000000;
	font-size:14px;
}

.menu-nav-r li a:hover  {
	text-decoration:none;
	width:auto;
	color:#999999;
	
	font-family:Museo_slab, Helvetica, sans-serif;
	
	
}

ul.menu-nav {

float:left;
margin:0 0 0 0 !important;
background-color:#000000;
width:100%;
font-family:bebas;
}

ul.menu-nav li	{
	display:block; 
	float:left;
	padding-left:10px;
	font-family:Bebas;
	
}

ul.menu-nav li a  {
	border:none;
	text-decoration:none !important;
	display:block;
	float:left;
	font-family:Bebas;
	

	
	
}

ul.menu-nav li a span	{
	display:block; 
	padding:15px 9px 15px;
	color:#ffffff;
	display:block; 
	font-size:16px;
	font-weight:300;
	text-decoration:none !important;
	font-family:Bebas;
	text-transform:uppercase;
	float:left;
	display:block;
}

/*-------------------hover----*/

ul.menu-nav li a:hover  {
	border:thin #000066;
	display:block; 
	text-decoration:none;
	width:auto;
	font-weight:200;
	background:#d20000;
	color:#fff;
	font-family:Bebas;
	
}
ul.menu-nav li a:hover span	{
	display:compact;
	color:ffffff;
	font-family:Bebas;
	background-color:#d20000;
	font-weight:normal;
	
}

/*-------------------active----*/

ul.menu-nav li.active a {
	border:none;
	display:block;
	float:left; 
	text-align:center;
	width:auto;
}
ul.menu-nav li.active a span {
	 color:#440717;
	 
	 
	 
}
.fixed
{
z-index:999999;
    position: fixed;
	background-color:#FFFFFF;
    top: 0;
	padding-left:15px;
   
}


</style>

<title>Welcome To Crime Reporting System</title>
</head>

<body><div id="wrap">
<div class="menu">

		<div class="menu-nav-r">
		<?php
		include("config.php");
		if(isset($_SESSION['username'])):
		?>
		
			<li> <p style="font-family:Museo_slab, Helvetica, sans-serif; color:#db1111; font-size:18px; float:left;"><?php echo $_SESSION['username']; ?></p></li>
			<li><a href="viewprofile1.php"> Edit Profile</a> | </li>
			<li> <a href="logout.php">Logout</a></li> 		
		<?php else:
		?>
			<li> <a href="loginpage.php">Login</a>  | </li> 
			<li> <a href="regpage.php">Register</a></li>
		
		<?php endif;
		?>
			</div>
	
			<div class="clear"></div>	
      	 	<ul class="menu-nav">
		<?php if(isset($_SESSION['username'])):
		?>
			<li class="item54"><a href="Index.php"><span>Home </span></a></li>
			<li class="item56"><a href="FIRreg1.php"><span>Register &nbsp;FIR </span></a></li>
			<li class="item56"><a href="FIRreg1.php"><span>Report &nbsp; Crime</span></a></li>
			<li class="item58"><a href="econtact.php"><span>Emergancy &nbsp; Contacts</span></a></li>
			<li class="item58"><a href="viewmissing_citizen.php"><span>Missing&nbsp; Persons</span></a></li>
			<li class="item54"><a href="View_alluserprofile.php"><span>All &nbsp; User &nbsp; Profile </span></a></li>
			<li class="item58"><a href="help.php"><span>Help &nbsp; Desk </span></a></li>
			<li class="item58"><a href="faq.php"><span>FAQ </span></a></li>
			<li class="item54"><a href="aboutus.php"><span>About &nbsp; Us </span></a></li>
		<?php else:
			?>
			<li class="item54"><a href="Index.php"><span>Home </span></a></li>
			<li class="item56"><a href="mustlogin.php"><span>Register &nbsp;FIR </span></a></li>
			<li class="item56"><a href="mustlogin.php"><span>Report &nbsp; Crime</span></a></li>
			<li class="item58"><a href="econtact.php"><span>Emergancy &nbsp; Contacts</span></a></li>		
			<li class="item54"><a href="regpage.php"><span>Join &nbsp;Us </span></a></li>
			<li class="item58"><a href="help.php"><span>Help Desk </span></a></li>	
			<li class="item54"><a href="faq.php"><span>FAQ </span></a></li>		
			<li class="item54"><a href="aboutus.php"><span>About&nbsp;Us </span></a></li>
		<?php endif;
		?>
			<div class="clear"></div>	
	
		
			</ul>
			</div>
			</div>
			<div class="clear"></div>
		

</body>
</html>
