<?php
//McDowell'sVoice
/*
Name: Rob Jazowski	
Date: 2/16/17
Project: P04
File Name: submitpage4.php
*/
$title="McDowellsVoice";
include "header.php";
?>
<?php
if (!isset($_GET["submit"])){
?>
<form action="submitpage4.php">
<p>We would be most delighted to hear of additional comments:
<input type="text" placeholder=" Optional Comments " name="comments" /></p>
<input type="submit" name="submit" value="Next" />
</form>
<?php
}else{
?>	
<p>You entered: <?php echo $_GET['comments']; ?></p>
<a href="submitpage5.php">
<input type="button" value="Next" />
</a>
<?php
}
?>