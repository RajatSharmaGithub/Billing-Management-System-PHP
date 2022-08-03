<?php 
include('connection.php');

if(isset($_POST['submit']))

{
	$pn=$_POST['pnn'];
	$pc=$_POST['pcc'];
	$pq=$_POST['quantity'];
	$pp=$_POST['price'];
	$pgst=$_POST['gst'];
	if($pn!="")
	{

$rs=mysqli_query($con,"INSERT INTO productentry set pname='$pn',pcode='$pc',quantity='$pq',pprice='$pp',gst='$pgst'");

if ($rs) 
{
echo "<span style='color:green;'>Submitted Successfully!</span>";
	
	}
	else

	{ 
		echo "OOOopppss";

	}
}
}
?>
<?php

$hostname="localhost";
$user="root";
$pass="";
$con=mysqli_connect($hostname,$user,$pass);
mysqli_select_db($con,"billingsystem");

$sno = 1;

$qry = "SELECT * from productentry order by id desc ";
$result=mysqli_query($con,$qry);

while($row=mysqli_fetch_array($result))
{

?>
   <tr data-expanded="true">
    
            <td><?php echo $sno++; ?></td>
            <td><?php echo $row["pname"]; ?></td>
            <td><?php echo $row["pcode"]; ?></td>
            <td><?php echo $row["quantity"]; ?></td>
            <td><?php echo $row["pprice"]; ?></td>
            <td><?php echo $row["gst"]; ?></td>

    <td><a href="editproduct.php?id=<?php echo $row['id']; ?> "> Edit  </a> </td>
    <td><a href="delete.php?delete_id=<?php echo $row['id']; ?> "> Delete  </a> </td>

</tr>

<?php
}
?>        