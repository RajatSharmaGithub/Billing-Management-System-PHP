<?php

include('links.php');
include('header.php');
include('sidebar.php');
include('connection.php');

$amt="";

if(isset($_POST['submit']))

{
	$dt=$_POST['date'];
	$fn=$_POST['firstname1'];
	$n=$_POST['number'];
	$ad=$_POST['address1'];
	$c=$_POST['city1'];
	$p=$_POST['select'];
	$pc=$_POST['pcode'];
	$pri=$_POST['price'];
	$qty=$_POST['qntity'];
	$gt=$_POST['gst'];
	if($fn!=""){
$amt=$pri * $qty; 

$rs=mysqli_query($con,"INSERT INTO billentry set datee='$dt',custname='$fn',contno='$n',address='$ad',city='$c',product='$p',pcode='$pc',price='$pri',quantity='$qty',gst='$gt'");

if ($rs) 
{
	echo "<script>alert('UPDATED')</script>";
	
	}
	else

	{ 
		echo "OOOopppss";

	}
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Product Entry</title>
<body >
	<button class="btn btn-danger" style="float: right;margin-right: 10px;"><a href="admindashboard.php"  style="color: white;">Back</a></button>

	<div class="container mt-2">

	<div class="row">
	<div class="col-sm-12" style="height:30px;background-color:lightcoral;text-align: center;"> BILL ENTRY

</div>
</div>
</div>

<div class="container mt-2" id="body">
<form action="" method="POST" class="form-inline" style="padding: 20px;">

<input type="date" name="date"> <br><br>

<label><b>Cust. Name:</b><input  type="text" name="firstname1" class="form-control" required="" id="z1"></label>&nbsp
<label><b>Contact No:</b><input  type="number" name="number" class="form-control" id="z2"></label>                                                                                 &nbsp
<label><b>Address:</b><input  type="text" name="address1"class="form-control" id="z3"></label> &nbsp
<label><b>City:</b><input  type="text" name="city1"class="form-control"></label>       &nbsp

<br>
<br>

<label><b>Product Name:</b>

<select name="select" id="myselect" class="form-control" onchange="getdata()">
		<option value="">choose product</option>
<?php


$qry = "SELECT * from productentry";
$result=mysqli_query($con,$qry);

while($row=mysqli_fetch_array($result))
{
	?>

<option value="<?php echo $row['id'];?>"><?php echo $row['pname'];?></option>

<?php } ?>
		
		
</select> 
</label>&nbsp&nbsp 


<label><b>Product Code:</b><input  type="text" id="pc" name="pcode"class="form-control"></label>                                                                                    &nbsp
<label><b>Price:</b><input type="text" id="ppr" name="price"class="form-control"></label>    &nbsp
<label><b>Quantity:</b><input type="text" name="qntity"class="form-control"></label>&nbsp<br><br>
<label><b>GST % :</b><input type="text" name="gst"class="form-control"></label>&nbsp<br><br>
<label><b>TOTAL Amount :</b><?php echo $amt; ?></label>

<input type="submit" name="submit" value="Save" class="btn btn-primary" style="margin-left:500px;">

</div>
</form>

<div class="container mt-2">

<div class="row mt-2">
<div class="col-sm-12"style="height:30px;background-color:lightseagreen;text-align:center;"> Delivery Invoice
			
</div>
</div>
</div>


<br>

<div class="container" >

<label><b>Same as Billing address:</b></label> <input type="checkbox" name="billing" onclick="gta()">
<br>
<br>
<label>Cust. Name:<input type="text" name="firstname2" id="demo"></label>
<label>Contact No:<input type="text" name="lastname2" id="demo2"></label>
<label>Address:<input type="text" name="address2" id="demo3"></label>
<label>City:<input  type="text" name="city2"></label>


</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">

	function getdata()
{
  	var x = document.getElementById("myselect").value;
	
    
$.ajax({ 
    
	url : "onchange.php",
	method : "POST",
	data : {

		myselect:x
		
	},

	success: function(e)
	{ 
		var r=e;
		var arr=r.split("||");

     document.getElementById('pc').value=arr[0];
     document.getElementById('ppr').value=arr[1];	

  }
})
}
</script>
<script type="text/javascript">

function gta()

{
 var g =document.getElementById("z1").value;
  var h =document.getElementById("z2").value;
   var i =document.getElementById("z3").value;
  

  document.getElementById("demo").value =g;
  document.getElementById("demo2").value =h;
  document.getElementById("demo3").value =i;
   

}
</script>

</html> 