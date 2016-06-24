<!DOCTYPE html>
<?php $thisPage = "Home - My Website"; ?>
<html>

<head>
	<link type="text/css" rel="stylesheet" href="style.css"/>
	<title><?php if ($thisPage!=="")
	echo "$thisPage";?></title>
</head>
	
<body>

	<?php include 'includes/header.php';?>
	
	
	<?php include 'includes/nav.php';?>

	<form>
		<p>Please enter your name here</p>
		<input type = "name" name = "name" placeholder="Name">
		<input type = "submit">
	</form>
<br>
	
		<img id="me" src="images/John.jpg" width="250px">
</body>

	<?php include 'includes/footer.php';?>
</html>