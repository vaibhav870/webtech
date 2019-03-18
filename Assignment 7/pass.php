<?php
include_once('db.php');

$username=$_POST['name'];

$result=mysqli_query($con,"select *  from users where username='$username'") or die( mysqli_connect_errno()) ;

if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               echo  $row["password"];
            }
         } else {
            echo "0 results";
         }
?>