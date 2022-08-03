
      		<input type="text" name="number1" placeholder="enter value 1" id="no1">
      		<input type="text" name="number2" placeholder="enter value 2" id="no2">


      		<input type="button" name="Click Here" value="Java" onclick="myfunction()"
                class="btn btn-primary">
      
      

      <script type="text/javascript">
      function myfunction()

      {

vl=document.getElementById('no1').value
vll=document.getElementById('no2').value

add=parseInt(vl)+parseInt(vll);

alert(add)

}

</script>