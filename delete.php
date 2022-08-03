<?php

$hostname="localhost";
$user="root";
$pass="";
$con=mysqli_connect($hostname,$user,$pass);
mysqli_select_db($con,"billingsystem");




if(isset($_GET["delete_id"]))
{

 $id=$_GET["delete_id"];
$rs=mysqli_query($con,"DELETE from productentry where id='$id'");

if($rs)
{
	header("Location: pentry.php");
}
else
{
	echo "Something Wrong";
}


}
?>