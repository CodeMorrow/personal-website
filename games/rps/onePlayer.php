<?php $thisPage = "Rock Paper Scissor";?>
<?php $directory = "../../"; ?>

<h3>Please Select Your Item</h3>

<form action="check_comp_winner.php">
	
	<label>
		<input type="radio" name="item" value="rock" />
		<img src="rock.png" width="50">
	</label>
<br>
	<label>
		<input type="radio" name="item" value="paper" />
		<img src="paper.png" width="50">
	</label>
<br>
	<label>
		<input type="radio" name="item" value="scissor" />
		<img src="scissor.png" width="50">
	</label>

	<input type="submit" name="Submit">
</form>

<?php include ($directory . 'includes/header.php');?>