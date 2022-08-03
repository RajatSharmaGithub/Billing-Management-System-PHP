<?php

include('links.php');
include('connection.php');

?>

<html>
<head>
</head>
<body>

<center><form action="" method="POST" style="margin-top: 20px;">

<input type="text" id="name" placeholder="Name">
<input type="number" id="mobile" placeholder="Enter number">
<input type="button" onclick="myfunction();" id="submit" value="Submit">

</form></center>

<div id="show_data"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">

myfunction();
 function myfunction()
{
  	var name = document.getElementById("name").value;
		var mobile = document.getElementById("mobile").value;
		var s = document.getElementById("submit").value;
    
$.ajax({ 
    
	url : "newaj.php",
	method : "POST",
	data : {

		name:name,
		mobile:mobile,
		submit:s

	},

	success: function(e)
	{ 

document.getElementById('show_data').innerHTML=e;
document.getElementById("name").value="";
document.getElementById("mobile").value="";
				
  }
})

}
</script>
</body>
</html>