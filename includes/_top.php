<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="<?php echo "$directory";?>images/JM-Logo-Square-Teal.png">
	<?php
		if($_GET["style"]=="pink"){
			echo '<link rel="stylesheet" type="text/css" href= ';?><?php echo "$directory";?><?php echo 'pink.css>';
		} else {
			echo '<link rel="stylesheet" type="text/css" href= ';?><?php echo "$directory";?><?php echo 'normal.css>';
		}
	?>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<title><?php if ($thisPage!=="")
		echo "$thisPage";?></title>
	<link href="https://fonts.googleapis.com/css?family=Alegreya+SC|Droid+Sans|Monda:700" rel="stylesheet">
</head>

	
<body class="body">
	<header class="header">
		<h1 class="header__title"><?php if ($thisPage!=="")
			echo "$thisPage";?></h1>
	</header>

	<!-- <?php include ($directory .'includes/_nav.php');?> -->

<div id=flexbox1>