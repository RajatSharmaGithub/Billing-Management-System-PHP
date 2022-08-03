<?php
include('links.php');
?>

<html>
<head>
</head>
<body>

<input type="text" id="n1">
<input type="text" id="n2">


<input type="button" value="save" onclick="myfunction()">

<script type="text/javascript">

function myfunction()

{
 var g =document.getElementById("n1").value;
  var h =document.getElementById("n2").value;

  document.getElementById("demo").innerHTML =g;
   document.getElementById("demo1").innerHTML =h;

}
</script>
<table class="table table-bordered">
<tr>
		<th><b> NAME </b></th>
		<th><b> CLASS</b></th>
	</tr>

	<tr>
		<td id="demo"></td>
		<td id="demo1"></td>
	</tr>
</table>
</body>
</html>
