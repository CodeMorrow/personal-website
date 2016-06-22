<!DOCTYPE html>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="style.css"/>
		<title>Articles</title>
	</head>

	<nav>
	<!-- Use this site for live web http://CodeMorrow.omahacodeschool.com -->
		<ul>
			<li<?php if ($thisPage=="Home") 
				echo " id=\"currentpage\""; ?>>
					<a href="index.php">Home</a></li>
			<li<?php if ($thisPage=="Goals") 
				echo " id=\"currentpage\""; ?>>
					<a href="goals.php">Goals</a></li>
			<li<?php if ($thisPage=="About Me") 
				echo " id=\"currentpage\""; ?>>
					<a href="about_me.php">About Me</a></li>
			<li<?php if ($thisPage=="Articles") 
				echo " id=\"currentpage\""; ?>>
					<a href="articles.php">Articles</a></li>
		</ul>
	</nav>

	<body>
		<h1>Welcome to Articles</h1>
			<img id= "newspaper" src="images/newspaper.jpg"/ width=250px>
		<ul>
			<li><a href="8_Characteristics_of_User_Interface.php">8 Characteristics Of Successful User Interfaces</a></li>
		</ul>
	</body>

	<footer><!--Link to My Facebook Page -->    
		<div id="facebook" class="footlink">
		    <a class="social_media" href="https://www.facebook.com/JMorrow16/" target="_blank">Find me on Facebook!</a>
		</div>
		
		<!--Link to My Twitter Page -->
		<div id="twitter" class="footlink">
		    <a class="social_media" href="https://twitter.com/Code_Morrow" target="_blank">Find me on Twitter!</a>
		
		<!--Link to My Github Page -->
		<div id="github" class="footlink">
		    <a class="social_media" href="https://github.com/CodeMorrow" target="_blank">Find me on Github!</a>
    </footer>
</html>