<?php

mysql_connect("localhost","root","");
mysql_select_db("crs");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
	<script type="text/javascript" src="js/jquery-easing-1.3.pack.js"></script>
	<script type="text/javascript" src="js/jquery-easing-compatibility.1.2.pack.js"></script>
	<script type="text/javascript" src="js/coda-slider.1.1.1.pack.js"></script>
	<style>
			  				  
.floatLeft 									{ float: left; margin-right: 10px;}
.floatRight									{ float: right; }
.clear 										{ clear: both; }
a											{ outline: none; }


/*
	PAGE STRUCTURE
*/
#page-wrap 								
	{ 
	width:1200px;
 }


/*
	TYPOGRAPHY
*/
ul											{ list-style: square inside; }
a, a:visited								{ color: #729dff; text-decoration: none; }
a:hover, a:active							{ color: white; }
blockquote									{ padding: 0 20px; margin-left: 20px; border-left: 20px solid #ccc; font-size: 16px; 
									  		  font-family: Georgia, serif; font-style: italic; margin-top: 10px;}

/*
	SLIDER
*/
.slider-wrap								
{ width:100%;}			
.stripViewer .panelContainer 
.panel ul				
					{ text-align: left; margin: 0 15px 0 30px; }
.stripViewer								{ position: relative; overflow: hidden; width: 750px; height:300px; padding-left:487px;}
.stripViewer .panelContainer				{ position: relative; left: 0; top: 0;  }
.stripViewer .panelContainer .panel			{ float: left; position: relative; width:1000px; margin:auto; }
.stripNavL, .stripNavR, .stripNav			{ display: none; }
.nav-thumb 									{ border: 1px solid black; margin-right: 5px; }
#movers-row									{ margin: 0 0 0 0; }
#movers-row div								{  float: left; }
#movers-row div a.cross-link 				{ float: right; }
.photo-meta-data							{ padding: 0 0 0 0;
											   z-index: 9999; color: white; }
.photo-meta-data p						{ color:#000000; padding: -550px 0 0 0; font-size:18px!important;}
.cross-link									{ display: block; width: 62px;  
											  position: relative; z-index: 9999; }

.wrapper img
{
	border-radius:150px;
}
.div12{padding-left:60px;}
	</style>
	
	<script type="text/javascript">
	
		var theInt = null;
		var $crosslink, $navthumb;
		var curclicked = 0;
		
		theInterval = function(cur){
			clearInterval(theInt);
			
			if( typeof cur != 'undefined' )
				curclicked = cur;
			
			$crosslink.removeClass("active-thumb");
			$navthumb.eq(curclicked).parent().addClass("active-thumb");
				$(".stripNav ul li a").eq(curclicked).trigger('click');
			
			theInt = setInterval(function(){
				$crosslink.removeClass("active-thumb");
				$navthumb.eq(curclicked).parent().addClass("active-thumb");
				$(".stripNav ul li a").eq(curclicked).trigger('click');
				curclicked++;
				if( 6 == curclicked )
					curclicked = 0;
				
			}, 2000);
		};
		
		$(function(){
			
			$("#main-photo-slider").codaSlider();
			
			$navthumb = $(".nav-thumb");
			$crosslink = $(".cross-link");
			
			$navthumb
			.click(function() {
				var $this = $(this);
				theInterval($this.parent().attr('href').slice(1) - 1);
				return false;
			});
			
			theInterval();
		});
	</script>
</head>

<body>
	
	<div id="page-wrap">
    
    <div id="first_name"></div>
											
	<div class="slider-wrap">
		<div id="main-photo-slider" class="csw">
			<div class="panelContainer">
			
			<?php
			
$selectQuery = "select * from mstr_missingcitizens mm,mstr_city mc where mm.city_id=mc.city_id ";
$resultSet = mysql_query($selectQuery) or die(mysql_error());
			if(mysql_num_rows($resultSet)==0){			
			}else{
			while($full=mysql_fetch_array($resultSet)){
			?>
			<div class="panel" first_name="<?php echo $full['first_name']?>">
					<div class="wrapper"><div class="div12">
<img src="<?php echo $full['upload_photo']?>"  width="110" height="110";/>	</div>		<br />						
<div class="photo-meta-data">
		<p> <font style="font-weight:bold";>Name: </font><?php echo $full["first_name"]; ?></p>
		<p> <font style="font-weight:bold";>Address: </font><?php echo $full["address"]; ?></p>
	    <p> <font style="font-weight:bold";>Date of missing: </font><?php echo $full["date_of_missing"]; ?></p>
	    <p>  <font style="font-weight:bold";>City: </font><?php echo $full["city_name"]; ?></p>				  </div>
					</div>
			  </div>	
		<?php }}?>
			</div>
		</div>
	</div>
	</div>
</body>
</html>