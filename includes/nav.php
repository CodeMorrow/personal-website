<!DOCTYPE html>
<html>
<head><title>Navigation</title></head>
<body>

	<div class="tabs">
	<!-- Use this site for live web http://CodeMorrow.omahacodeschool.com -->
		<div class="tab" class="is_tab_selected">
			<p<?php if ($thisPage=="Home - My Website") 
				echo "class=\"currentpage\">"; ?>>
					<a href="http://CodeMorrow.omahacodeschool.com/index.php">Home</a></p>
		</div>

		<div class="tab">
			<p<?php if ($thisPage=="Articles")
				echo "class=\"currentpage\">"; ?>>
					<a href="http://CodeMorrow.omahacodeschool.com/articles.php">Articles</a></p>
		</div>

		<div class="tab">
			<p<?php if ($thisPage=="Goals") 
				echo "class=\"currentpage\">"; ?>>
					<a href="http://CodeMorrow.omahacodeschool.com/goals.php">Goals</a></p>
		</div>

		<div class="tab">					
			<p<?php if ($thisPage=="About Me") 
				echo "class=\"currentpage\">"; ?>>
					<a href="http://CodeMorrow.omahacodeschool.com/about_me.php">About Me</a></p>
		</div>			
	</div>
</body>	
</html>