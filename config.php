<?php
$conn = mysqli_connect("localhost", "root", "") or die("Error");
mysqli_select_db($conn,"crs") or die("Error in selecting database");
?>
