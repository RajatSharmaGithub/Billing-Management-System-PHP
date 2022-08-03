<?php
include('links.php');
include('connection.php');

if(isset($_POST['submit']))

{
	$n=$_POST['name'];
		$m=$_POST['mobile'];

	if($n!="")
	{
$rs=mysqli_query($con,"INSERT INTO ajdata set name='$n',mobile='$m'");

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
<head>

</head>
<body>

<table class="table table-bordered">

<thead>
	<tr>
		<th><b> Sno </b></th>
		<th><b> NAME</b></th>
		<th><b> MOBILE</b></th>

	</tr>
</thead>
<tbody>

<?php
$sno = 1;

$qry = "SELECT * from ajdata order by id desc ";
$result=mysqli_query($con,$qry);

while($row=mysqli_fetch_array($result))
{

?>
            <tr data-expanded="true">
    
            <td><?php echo $sno++; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["mobile"]; ?></td>

            
            </tr>
        </tbody>
<?php
}
?>
</table>
</body>


