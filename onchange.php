<?php

include('connection.php');

$ps=$_POST['myselect'];
$sno = 1;

$qry = "SELECT * from productentry where id='$ps' ";
$result=mysqli_query($con,$qry);

while($row=mysqli_fetch_array($result))
{
      
      echo $row['pcode'];
      echo "||";
      echo $row['pprice'];
}
?> 
