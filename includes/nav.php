<!DOCTYPE html>

	<div class="tabs">
	<!-- Use this site for live web http://CodeMorrow.omahacodeschool.com -->
		<div class="tab is_tab_selected">
			<?php if ($thisPage=="Home - My Website") 
				echo "*"; ?>
					<a href="index.php">Home</a>
		</div>

		<div class="tab">
			<?php if ($thisPage=="Articles") 
				echo "*"; ?>
					<a href="articles.php">Articles</a>
		</div>

		<div class="tab">
			<?php if ($thisPage=="Goals") 
				echo "*"; ?>
					<a href="goals.php">Goals</a>
		</div>

		<div class="tab">					
			<?php if ($thisPage=="About Me") 
				echo "*"; ?>
					<a href="about_me.php">About Me</a>
		</div>			
	</div>
	
</html>