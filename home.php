<link rel="stylesheet" type="text/css" href="css/message.css" media="all">
<link rel="stylesheet" href="css/template.css" type="text/css">
<link rel="stylesheet" href="css/constant.css" type="text/css">
<link rel="stylesheet" href="css/specimen_stylesheet.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="css/stylesheet.css" type="text/css" charset="utf-8" />
<script type="text/javascript" src="css/mootools.js"></script>
<script type="text/javascript" src="css/caption.js"></script>
<script type="text/javascript" src="javascript/validation.js"></script>
<script src="javascript/jquery-latest.pack.js" type="text/javascript"></script>
<script src="javascript/jcarousellite_1.0.1c4.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$(".newsticker-jcarousellite").jCarouselLite({
		vertical: true,
		hoverPause:true,
		visible: 3,
		auto:500,
		speed:1000
	});
});
</script>
<style>
.div2 a
{
	text-decoration:none;
}
</style>
<?php
session_start();
include("config.php");
$username=$_SESSION['username'];
$update="UPDATE `mstr_login` SET `last_logindatetime`=CURRENT_TIMESTAMP WHERE `username`='$username'";
mysqli_query($conn,$update); 
?>
<div class="main">
<div id="wrap">   
<?php
	include("menu.php");
?>
			<div id="content">	
<?php
   include("sidebar.php");
?>

			<div class="div2">
				<h1> Welcome, &nbsp; &nbsp; <?php echo $_SESSION['username']; ?> </h1>
				<p>&nbsp;</p>
				<p><?php //echo base64_decode($_GET[msg]);?>
				<a href="viewprofile1.php"><input name="viewprofile"  type="button" class="header-button"  value="Edit Profile" />
				</a></p>
			</div>
		</div>
			<div class="clear"></div>
	   
<?php
	include("footer1.php");
?>

		</div>
		</div>