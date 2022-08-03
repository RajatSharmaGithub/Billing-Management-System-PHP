 <?php
include('links.php');
include('sidebar.php');
?>
 <table class="table">
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>DATE</th>
          
            <th > Customer Name</th>
           
            <th >Cont No</th>

            <th >Address</th>

            <th >City</th>

            <th >Product Code</th>

            <th>Price</th>
            <th>Action</th>
            <th>Action</th>



        </tr>
        </thead>
        <tbody>

<?php

$hostname="localhost";
$user="root";
$pass="";
$con=mysqli_connect($hostname,$user,$pass);
mysqli_select_db($con,"billingsystem");

$sno = 1;

$qry = "SELECT * from billentry order by id desc ";
$result=mysqli_query($con,$qry);

while($row=mysqli_fetch_array($result))
{

?>
   <tr data-expanded="true">
    
            <td><?php echo $sno++; ?></td>
            <td><?php echo $row["datee"]; ?></td>
            <td><?php echo $row["custname"]; ?></td>
            <td><?php echo $row["contno"]; ?></td>
            <td><?php echo $row["address"]; ?></td>
            <td><?php echo $row["city"]; ?></td>
            <td><?php echo $row["pcode"]; ?></td>
            <td><?php echo $row["price"]; ?></td>



    <td>  <a href="editstudent.php?id=<?php echo $row['id']; ?> "> <i class="fas fa-edit fa-2x"></i> </a> </td>
    <td><a href="pp.php"> <i class="fas fa-print fa-2x"></i></a> </td>

</tr>

<?php
}

 ?>        
        </tbody>
        </table>