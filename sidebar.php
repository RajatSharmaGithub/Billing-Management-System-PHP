<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large"> <i class="fas fa-smile-beam"></i>&nbsp
   <a href="admindashboard.php" style="text-decoration: none;"> Hey Admin &nbsp </a>

    &times;</button><br>
  <a href="pentry.php" class="w3-bar-item w3-button"><b>PRODUCT ENTRY </b></a><br>
  <a href="billentry.php" class="w3-bar-item w3-button"><b>BILLING </b></a><br>
  <a href="printbill.php" class="w3-bar-item w3-button"><b>Print BILL </b></a><br>
</div>

<!-- Page Content -->

  <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>


<script>

function w3_open()

 {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close()
 {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
     
</body>
</html> 
