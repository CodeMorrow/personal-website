<!DOCTYPE html>
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
</html>