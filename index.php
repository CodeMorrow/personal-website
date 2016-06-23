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
	
	<div class = "navbar">
		<?php include 'includes/nav.php';?>
	</div>
	
	
		<img id="me" src="images/John.jpg">
</body>

	<?php include 'includes/footer.php';?>
</html>