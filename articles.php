<!DOCTYPE html>
<?php $thisPage = "Articles";?>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="style.css"/>
		<title><?php if ($thisPage!=="")
		echo "$thisPage";?></title>
	</head>
	
	<?php include 'includes/header.php'; ?>
	
	<div class = "navbar">
		<?php include 'includes/nav.php'; ?>
	</div>
	
	<body>
	
		<h3>Check out these articles worth a read!</h3>
			<img id= "newspaper" src="images/newspaper.jpg"/ width=250px>
		<ul>
			<li><a href="articles/8_Characteristics_of_User_Interface.php" target="_blank">8 Characteristics Of Successful User Interfaces</a></li>
		</ul>

	</body>

	<?php include 'includes/footer.php'; ?>
</html>