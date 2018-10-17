<?php
//McDowell'sVoice
/*
Name: Rob Jazowski	
Date: 2/16/17
Project: P04
File Name: P04.php
*/
$title="McDowell'sVoice";
include "header.php";
?>
<?php
if (!isset($_GET["submit"])){

?>
<form action="P04.php">
<h1>Customer Satisfaction Survey on McDowell'sVoice.com</h1>

<h2>INSERT LOGO I'm McLuv'n it!<h2>

<h5> No Espanol <h5>

<h3>Welcome to the McDowell's Satisfaction<br>
 Survey DcDowell'sVoice.com<h3>
<p>We value your candid feedback and appreciate you taking the time to<br>
 complete our survey.<p> 

<p>INSERT #1 To begin, please inter the 26 digit Survey Code located in the<br>
 middle of your receipt.
 <input type="text" placeholder=" Please Enter Survey Code " name="SurveyCode" required /></p>

 <input type="submit" name="submit" value="submit" />
 
<p>Enter your favorite ice cream: <select name="icecream" required>
                                  <option value="">Please choose your favorite flavor</option>
								  <option value="vanilla">Vanilla</option>
								  <option value="chocolate">Chocolate</option>
                                  <option value="strawberry">Strawberry</option>
                                  <option value="butter pecan">Butter Pecan</option>
                                  <option value="coconut chip">Coconut Chip</option>
                                  <option value="chocolate chip">Chocolate Chip</option>
                                  <option value="peanut butter cup">Peanut Butter Cup</option>
							      <option value="almond joy">Almond Joy</option>
                                  <option value="rocky road">Rocky Road</option>
                                  <option value="raspberry ripple">Raspberry Ripple</option>
								  </select>
</p>
<p>
What is your favorite season?  <input id="RBSpring" required type="radio" name="season" value="Spring"><label for="RBSpring">Spring</label>
                               <input id="RBSummer" required type="radio" name="season" value="Summer"><label for="RBSummer">Summer</label>
                               <input id="RBFall"   required type="radio" name="season" value="Fall"><label for="RBFall"  >Fall</label>
                               <input id="RBWinter" required type="radio" name="season" value="Winter"><label for="RBWinter">Winter</label>
</p>

<?php 
if ((!isset($_GET["hobbies"]))||(empty($_GET["hobbies"]))){
	if ((isset($_GET["hobbies"]))&&(empty($_GET["hobbies"]))){
		$error="No hobbies entered.";
	}
?>
<p>What are some of your hobbies?
							   <input id="CBBicycling"     type="checkbox" name="hobbies[]" value="Bicycling"       /><label for="CBBicycling">Bicycling</label>
                               <input id="CBCamping"       type="checkbox" name="hobbies[]" value="Camping"         /><label for="CBCamping">Camping</label>
                               <input id="CBMotorcycling"  type="checkbox" name="hobbies[]" value="Motorcycling"    /><label for="CBMotorcycling">Motorcycling</label>
			                   <input id="CBMusic"         type="checkbox" name="hobbies[]" value="Music"           /><label for="CBMusic">Music</label>
                               <input id="CBShooting"      type="checkbox" name="hobbies[]" value="Shooting"        /><label for="CBShooting">Shooting</label>
			                   <input id="CBCrocheting"    type="checkbox" name="hobbies[]" value="Crocheting"      /><label for="CBCrocheting">Crocheting</label>
							   <input id="CBOther"         type="checkbox" name="hobbies[]" value="Other"           /><label for="CBOther">Other</label>
</p>							 
<input type="submit" name="submit" value="submit" />
<input type="reset" value="clear" />
</form>
<?php
}
?>
<?php
}else{
?>
<h2>Show results</h2>	
<p>Hi, nice to meet you <?php echo $_GET['name1']; ?></p>

<p>Yum, I like <?php echo $_GET['icecream']; ?> too!</p>

<p><?php echo $_GET['season']; ?> is a wonderful season.</p>

<?php
		//if ((!isset($_GET["hobbies"]))||(empty($_GET["hobbies"]))){
		//	if (!isset($_GET["hobbies"])){
		//		$error="You have no hobbies";
		//	}else{
		//		<p>You chose the following hobbies:<?php echo "<p>".implode(", ",$_GET['hobbies'])."</p>"; ?>
				
		//	}
		?>	

//<p>You chose the following hobbies:<?php echo "<p>".implode(", ",$_GET['hobbies'])."</p>"; ?>
   
<?php
}
?>
<?php
include "footer.php";
?>
