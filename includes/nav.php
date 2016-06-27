<div class="tabs">

	<div class="tab is_tab_selected">
		<p <?php if ($thisPage=="Home - My Website") 
			echo "class=\"currentpage\""; ?>>
				<a href="index.php">Home</a></p>
	</div>

	<div class="tab">
		<p <?php if ($thisPage=="Articles")
			echo "class=\"currentpage\""; ?>>
				<a href="articles.php">Articles</a></p>
	</div>

	<div class="tab">
		<p <?php if ($thisPage=="Goals") 
			echo "class=\"currentpage\""; ?>>
				<a href="goals.php">Goals</a></p>
	</div>

	<div class="tab">
		<p <?php if ($thisPage=="Games") 
			echo "class=\"currentpage\""; ?>>
				<a href="games.php">Games</a></p>
	</div>

	<div class="tab">					
		<p <?php if ($thisPage=="About Me") 
			echo "class=\"currentpage\""; ?>>
				<a href="about_me.php">About Me</a></p>
	</div>
				
</div>