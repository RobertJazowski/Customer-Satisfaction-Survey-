<?php
//McDowell'sVoice
/*
Name: Rob Jazowski	
Date: 2/16/17
Project: P04
File Name: submitpage2.php
*/
$title="McDowellsVoice";
include "header.php";
?>
<?php
if (!isset($_GET["submit"])){
?>
<form action="submitpage2.php">
<p>How were you served?<br>
<input id="RBDriveThru"required type="radio" name="howvisit" value="Drive-Thru"><label for="RBDriveThru">Drive-Thru</label>
<input id="RBCarryOut" required type="radio" name="howvisit" value="Carry Out"> <label for="RBCarryOut" >Carry Out</label>
<input id="RBDineIn"   required type="radio" name="howvisit" value="Dine-In">   <label for="RBDineIn"   >Dine-In</label>
</p>
<input type="submit" name="submit" value="Next" />
</form>
<?php
}else{
?>
<p>You entered: <?php echo $_GET['howvisit']; ?></p>
<a href="submitpage3.php">
<input type="button" value="Next" />
</a>
<?php
}
?>