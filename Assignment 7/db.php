<?php


$con=mysqli_connect("localhost","root","") or die('error' . mysqli_connect_errno());

$db=mysqli_select_db($con,"test");

?>