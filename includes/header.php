<!DOCTYPE html>
<html>
<head><title>Header</title></head>
<body>
		<header>
			<h1><?php if ($thisPage!=="")
		echo "$thisPage";?></h1>
			<h3>Welcome <?php echo $_GET["name"]; ?>!</h3>
		</header>
</body>
</html>