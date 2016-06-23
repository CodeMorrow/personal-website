<!DOCTYPE html>
<?php $thisPage = "About Me"; ?>
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
			<img id="me" src="images/John.jpg">
			<p>I live in Omaha, NE. I took it upon myself to learn the basics of coding languages (HTML, CSS, JavaScript). I am currently attending Omaha Code School. I have a had former jobs in all sectrums including, Cook, Server, Bartender, Welding Inspector, and Youth Football/Basketball/Track Coach.</p>

			<p>My hobbies include Golf, Fantasy Football, Working Out, Cycling, and trying news beers, whiskeys and food.</p>
	</body>

	<?php include 'includes/footer.php'; ?>
</html>