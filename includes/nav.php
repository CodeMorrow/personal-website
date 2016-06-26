<!DOCTYPE html>
<html>
<head><title>Navigation</title></head>
<body>

	<div class="tabs">
	<!-- Use this site for live web http://CodeMorrow.omahacodeschool.com -->
		<div class="tab is_tab_selected">
			<?php if ($thisPage=="Home - My Website") 
				echo "*"; ?>
					<a href="http://CodeMorrow.omahacodeschool.com/index.php">Home</a>
		</div>

		<div class="tab">
			<?php if ($thisPage=="Articles") 
				echo "*"; ?>
					<a href="http://CodeMorrow.omahacodeschool.com/articles.php">Articles</a>
		</div>

		<div class="tab">
			<?php if ($thisPage=="Goals") 
				echo "*"; ?>
					<a href="http://CodeMorrow.omahacodeschool.com/goals.php">Goals</a>
		</div>

		<div class="tab">					
			<?php if ($thisPage=="About Me") 
				echo "*"; ?>
					<a href="http://CodeMorrow.omahacodeschool.com/about_me.php">About Me</a>
		</div>			
	</div>
</body>	
</html>