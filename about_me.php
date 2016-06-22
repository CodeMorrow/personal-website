<!DOCTYPE html>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="style.css"/>
		<title>About Me</title>
	</head>

	<!-- Use this site for live web http://CodeMorrow.omahacodeschool.com -->
	<nav>
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
		<h1>Welcome to My Personal Website</h1>
			<img id="me" src="images/John.jpg"/>
			<p>I live in Omaha, NE. I took it upon myself to learn the basics of coding languages (HTML, CSS, JavaScript). I am currently attending Omaha Code School. I have a had former jobs in all sectrums including, Cook, Server, Bartender, Welding Inspector, and Youth Football/Basketball/Track Coach.</p>
	</body>

	<footer>
		<!--Link to My Facebook Page -->    
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