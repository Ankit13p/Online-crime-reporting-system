<?php include("sessionHandler.php");
include("header2.php");
include("config.php");
include("sidebar.php");


  $username =$_SESSION['username'];
$selectQuery = "select *from fir_details fd,mstr_profile mp,fir_forward ff,mstr_officer mo where mp.username = '".$username."' and mp.id = fd.reg_id and ff.frmofficer=mo.username";

$r = mysqli_query($conn,$selectQuery);

//echo $selectQuery;
  while($record = mysqli_fetch_array($r))
  
						  {
							  $b=$record['policestation_id'];
							  $select="select * from mstr_policestation where policestation_id='".$b."'";
							  $d= mysqli_query($conn,$select);
							  $f = mysqli_fetch_array($d);
							  if($record['status']==1)
							  {
								  $st="Registered.get more details from police station.";
								  }
							  else
							  {
								  $st="Not Registered.Inquiry in progress.get more details from police station.";
							  }
						  }
							  
						  ?>
                
                     
          
 

<link rel="stylesheet" href="files/template.css" type="text/css">
<link rel="stylesheet" href="files/constant.css" type="text/css">
<script type="text/javascript" src="javascript/jquery.js"></script>
<link rel="stylesheet"  type="text/css" href="facebox/facebox.css" media="screen" />
<script type="text/javascript" src="facebox/facebox.js"></script>
<script type="text/javascript">
   jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loading_image : 'facebox/loading.gif',
        close_image : 'facebox/closeButton.png'
      })
    })
  </script>
  <link type="text/css" href="themes/base/jquery.ui.all.css" rel="stylesheet" />
	<script type="text/javascript" src="jquery-1.3.2.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.accordion.js"></script>
	<link type="text/css" href="demos.css" rel="stylesheet" />
	<script type="text/javascript">
	$(function() {
		$("#accordion").accordion();
	});
	</script>
<style type="text/css">
<!--
.style3 {color: #000000}
.style6 {
	font-size: 18px;
	color: #797979;
}
.style10 {margin: 0 0px 10px 0; padding: 16px 0 2px 27px; color: #959595; line-height: 140%;}
.style15 {font-size: 18px}
.style19 {font-size: 11px; }
-->
</style>
<div id="content">
  <div class="clear">
    <!--right-->
    <!--left-->
    <div id="container" class="wrapper-container">
      <div class="corner-top-left">
        <div class="corner-top-right">
          <div class="corner-bottom-left">
            <div class="corner-bottom-right">
              <form action="chkFIRstatus.php" method="post" enctype="multipart/form-data" name="form1">
                <div>
                  <h2><span class="componentheading style6"><span class="style10">  Your FIR Status:</span> </span></h2>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      <h1>Your FIR <?php echo $record['reg_id']; ?> is <?php echo $st; ?>policestation name is <?php echo $f['policestation_name']; ?> </h1>   </p>
                <p>&nbsp;</p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <!--footer-->
    <div class="footer clear">
    	<span>Business © 2009  |  <a href="#">Privacy Policy</a></span>
    	<a href="http://www.joomla.org/">Joomla!</a> is Free Software 
released under the GNU/GPL License. &nbsp;&nbsp;&nbsp;<!--{%FOOTER_LINK} -->
    </div>
</div>
<!--osc3.template-help.com -->


</body></html>