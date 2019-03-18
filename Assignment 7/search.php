<?php
include_once('db.php');

$username=$_POST['name'];

$result=mysqli_query($con,"select *  from emp where name='$username'") or die( mysqli_connect_errno()) ;

	echo "<table> <tr bgcolor='#CCCCCC'><td> Name </td><td>Age</td><td>City</td></tr>";

if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               echo  "<tr><td>".$row['name']."</td> <td>" .$row['age'] ."</td> <td>" . $row['city']."</td></tr>";
            }
         } else {
            echo "0 results";
         }


         echo "</tr> </table>";
?>
