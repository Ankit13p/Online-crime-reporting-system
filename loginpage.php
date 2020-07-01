<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
session_start();

if(isset($_SESSION['username'])){
	$msg = base64_encode("Registered Successfully"); 
	header("location:home.php?msg=$msg");
}
?>
<?php include("facebox.php"); ?>
  <script type="text/javascript" src="css/mootools.js"></script>
  <script type="text/javascript" src="css/caption.js"></script>
<!--StyleSheet included-->
<link rel="stylesheet" type="text/css" href="css/message.css" media="all">
<link href="bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">
<!--Stylesheet ends here-->

<!--Javascript included-->
<script type="text/javascript" src="javascript/validation.js"></script>
<link rel="stylesheet" href="css/template.css" type="text/css">
<link rel="stylesheet" href="css/constant.css" type="text/css">

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

.loginbody{
width:400px;
padding:40px inherit 40px inherit;
margin:auto;

}
.loginbody h1{ font-family:bebas;

font-size:24px;
padding:10px 0px 5px 0px;
color:#000000;
border-bottom:4px solid #cf0000;
}
/*----------------------------------------login-form---*/

.moduletable-login { color:#848181; padding:15px 0 0 25px;}


/*-----------------content----*/

.module-login label {
	font-size:14px;
	line-height:21px;
	display:block;
	color:#000000;
	font-weight:normal;
	padding:0 0 0 0;

}

.module-login p, label.remember {
	font-size:14px;
	font-weight:normal;
	padding:3px 0px 0px 0px;
	color:#000000;

}

label.remember{ font-size:12px; color:#1582E5;  padding-left:3px;  padding-top:2px; text-decoration:underline; padding-bottom:5px;}
.module-login a{
	color:#000000
	font-size:14px;
	line-height:12px !important;
}

.module-login a:hover {
	color:#1582E5;
	
	
}
.bg-input{ width:100%; overflow:hidden; background:url(../images/bg_input.gif) 0 0 no-repeat; height:21px; margin:6px 0 5px 0;}
.module-login .inputbox {
  padding: 5px;
  width: 93%;

  color:#606060; font-size:13px; font-family: 'Lato', sans-serif;margin-bottom:10px;
}
}


.indent-button{margin:6px 0 1px 0;}
.module-login .button { /* button */
	color:#FFF;
	text-decoration:none!important;
		 font-size:14px;
		  border:none;
		  height:auto !important;
		 line-height:14px;
		  font-family: 'Lato', sans-serif;
		  padding:4px 0 6px 0  !important;
		  margin:2px 0 2px 0 !important;
		  background:#cf0000; 
		   width:69px !important;
		   text-align:center;
		   display:block;
		   font-weight:bold;
		   text-transform:capitalize !important;
		   float:none !important;
		   border-radius:5px;
	
	
	
	
	
}
.module-login .button:hover{ color:#FFF; background:#000000; text-decoration:none;}



.form-indent-button{padding:9px 0 5px 0 !important; font-size:14px; }

.form-indent1{font-size:14px !important;  color:#606060 !important; line-height:15px; padding:8px 0 0 0 !important; font-family: 'Lato', sans-serif; font-weight:bold;}
.form-indent1 a, .form-indent1 a:hover{ color:#000093 !important; padding-top:5px; font-size:14px !important; display:block; font-weight:normal; font-family: 'Lato', sans-serif; font-weight:bold;}

.form-indent2{font-size:14px !important;  color:#606060 !important; line-height:15px; padding:0 0 0 0 !important; font-family: 'Lato', sans-serif; font-weight:bold;}
.form-indent2 a, .form-indent1 a:hover{ color:#000093 !important; padding-top:5px; font-size:14px !important; display:block; font-weight:normal; font-family: 'Lato', sans-serif; font-weight:bold;}


#mod_login_remember { /*checkbox*/
	background:#fff;
	border:none;
	display:block;
	float:left;
	margin:3px 5px 0px 0px;
	vertical-align:middle;
	width:12px;
	height:12px
}
.contenttoc th{ padding-bottom:10px;}
.pagenavcounter{ padding:15px 0;}
.article-indent h3 img{ margin:5px 0 0 0 !important;}
.article-indent h3, .article-indent h2{ padding:15px 0 10px 0;}
.separator-bottom{ background:url(../images/separator_bottom.gif) bottom left repeat-x;}
.width{ width:100%;}
.extra-indent-right{ padding:11px 14px 0 0;}




</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Your Account</title>
</head>

<body>


<div class="main">
<div id="wrap">   
<?php
	include("menu.php");
?>
 <div class="loginbody">

              <div class="right-indent"><div class="clear">
                 <div class="wrapper-box module-login">
                
                                                                        
	          <h1> Login</h1>
                                                          
                                                                              
       <div class="main-box">
 
	   <form action="checkLogin.php" method="post" name="login" class="form-login">
             <label for="mod_login_username"> Username </label>
             <input name="username" id="username" class="inputbox" alt="username" type="text">
	         <script type="text/javascript">
				 var f1 = new LiveValidation('username');
				 f1.add(Validate.Presence,{failureMessage: " Please enter username"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: " It allows                     only characters"});
				 f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: " Invalid                 username"});
	         </script>
             <label for="mod_login_password"> Password </label>
             <input id="password" name="password" class="inputbox" alt="password" type="password">
             <script type="text/javascript">
				 var f1 = new LiveValidation('password');
				 f1.add(Validate.Presence,{failureMessage: " Please enter password"});
				   //f1.add(Validate.Format,{pattern: /^[a-zA-Z\s]+$/i ,failureMessage: " It allows only characters"});
				 //f1.add(Validate.Format,{pattern: /^[a-zA-Z][a-zA-Z\s]{0,}$/,failureMessage: " Invalid password"});
	         </script>
	         <div class="indent-button">
             <input name="Submit" class="button png" value="Log in" type="submit">
	         </div>   
            
           <p class="form-indent1"><a class="form-indent1" href="forgot.php" style="text-decoration:underline;"> Forgot your username/password?</a>  </p>
          
             <p class="form-indent2"> No Account Yet? <a href="regpage.php" style="text-decoration:underline;"> Create an account</a> </p>
             <input name="option" value="com_user" type="hidden">
             <input name="task" value="login" type="hidden">
             <input name="return" value="L2pvb21sYV8yNTQ2Ni8jY29udGVudA==" type="hidden">
      </form>
		   <p>&nbsp;</p>
		   <p>&nbsp;</p>
        </form> </div></div></div></div></div>

<div class="clear"></div>
	  <div id="wrap">  <?php
	   include("footer1.php");
	   ?> </div>