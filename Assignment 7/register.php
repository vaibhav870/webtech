<?php 
include_once("db.php");

$username=$_POST['name'];
$password=$_POST['pass'];



       $query1=mysqli_query($con,"select * from users where username='$username' and password='$password'");

            $rows=mysqli_num_rows($query1);

            if($rows>=1){
                            echo "already registerd";
                          }
                          
                          else{
                            $query ="INSERT INTO users(username,password )VALUES ('$username','$password')";
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
                                }

?>