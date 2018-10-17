<?php
//McDowell'sVoice
/*
Name: Rob Jazowski	
Date: 2/16/17
Project: P04
File Name: submitpage5.php
*/
$title="McDowellsVoice";
include "header.php";
?>
<?php
if (!isset($_GET["submit"])){
?>

<p>Survey Number is </p>

<button onclick="myFunction()">Click for Survey Code</button>
 <p id="surveycode"></p>
 <script>
function myFunction() {
	var sc = document.getElementById("surveycode")
	sc.innerHTML = Math.floor((Math.random()* 10000)+ 1);
}
</script>


<a href="submitpage6.php">
<input type="button" value="Next" />
</a>
<?php
}
?>