<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="<?php echo "$directory";?>images/favicon.ico">
	<link type="text/css" rel="stylesheet" href="<?php echo "$directory";?>style.css"/>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<title><?php if ($thisPage!=="")
	echo "$thisPage";?></title>
</head>
	
<body class="Site">
	<header>
		<h1><?php if ($thisPage!=="")
			echo "$thisPage";?></h1>
	</header>

	<?php include ($directory .'includes/_nav.php');?>

<div id=flexbox1>