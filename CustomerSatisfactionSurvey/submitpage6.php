<?php
//McDowell'sVoice
/*
Name: Rob Jazowski	
Date: 2/16/17
Project: P04
File Name: submitpage6.php
*/
$title="McDowellsVoice";
include "header.php";
?>

<?php
$submitted=false;
if (isset($_GET["submit"])){
    $title="Form Has Been Submitted";
    $submitted=true;
}else{
    $title="Unsubmitted Form";
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>
        <?php echo$title; ?>
    </title>
    <?php
    if ($submitted!=true){
    ?>
    <link href="styles/styles_a.css" rel="stylesheet" />
</head>
<body>
    <form method="get" action="submitpage6.php">
        <input type="submit" value="submit" name="submit" />
    </form>
   
	<p>Or</p>
	
    <a href="index.php">
<input type="button" value="Back to Survey" />
</a>
</p>
    <?php
    }else{
    ?>
<link href="styles/styles_b.css" rel="stylesheet" />
</head>
<body>
    <h2>Your Form has been submitted</h2>
    
	<a href="index.php">
<input type="button" value="Back to Survey" />
</a>
<h2>Or head on over to the Golden Arcs</h2> 
<a href="https://en.wikipedia.org/wiki/Coming_to_America#McDowell.27s">
<input type="button" value="Go to McDowell's" />
</a>
    <?php
    }
    ?>
</body>
</html>