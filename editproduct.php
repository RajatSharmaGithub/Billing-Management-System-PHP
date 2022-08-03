<?php

$pnam="";
$pcod="";
$quan="";
$ppri="";
$g="";

include('links.php');
include('connection.php');

if (isset($_GET["id"]))

{

$id=$_GET["id"];
$rs=mysqli_query($con, "SELECT * from productentry where id=$id");

while ($row =mysqli_fetch_array($rs))

{

	$pnam=$row["pname"];
	$pcod=$row["pcode"];
	$quan=$row["quantity"];
	$ppri=$row["pprice"];
	$g=$row["gst"];
	

}
}

if (isset($_POST['edit']))

 {

 	$id=$_POST["id"];
	$ppname=$_POST["productname"];
	$ppcode=$_POST["productcode"];
	$ppquan=$_POST["quantity"];
	$ppric=$_POST["price"];
	$ppgst=$_POST["gst"];




$result=mysqli_query($con,"UPDATE productentry set pname ='$ppname' , pcode='$ppcode', quantity='$ppquan',pprice='$ppric' , gst='$ppgst' where id='$id'");

 if($result)
 {

header("location: pentry.php");
 }
else 
{
	echo "Something wrong";
}
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Edit DATA</title> 

</head>

<center><body>

	<div style="width: 500px;text-align: center;font-size: large;">

	<form class="form-group" action="editproduct.php" method="POST" >

		

<input type="hidden" name="id" value="<?php echo $id; ?> ">

Product Name<input type="text" name="productname" value="<?php echo $pnam ?> " class="form-control"> <br><br>
Product CODE<input type="text" name="productcode" value="<?php echo $pcod ?> "class="form-control"> <br> <br>
Quantity <input type="text" name="quantity" value="<?php echo $quan ?> "class="form-control"> <br><br>
Price <input type="text" name="price" value="<?php echo $ppri ?> "class="form-control" > <br><br>
GST % <input type="text" name="gst" value="<?php echo $g ?> "class="form-control" > <br><br>


	<input type="submit" name="edit" value="Update" class="btn btn-success">

		

</form>
</div>

</body>
</center>
</html>