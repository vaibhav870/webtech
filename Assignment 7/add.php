<?php
include_once("db.php");

$username=$_POST['name'];
$age=$_POST['age'];
$city=$_POST['city'];



$query ="INSERT INTO emp(name,age,city)VALUES ('$username','$age','$city')";
$result = mysqli_query($con,$query);

//   echo $result;
if ( false===$result ) {
            printf("error: %s\n", mysqli_error($con));
              }
              if($result == TRUE)
                  {
                            echo "successful";
                  }else
              {
                    echo "error";
            }


?>
