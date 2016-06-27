<?php $thisPage = "Rock Paper Scissor";?>
<?php $directory = "../../"; ?>

<h3>Please Select Your Item</h3>

<form action="player2_choose.php">
	
	<label>
		<input type="radio" name="item" value="rock" />
		<img class="rpslogo" src="images/rock.png">
	</label>

	<label>
		<input type="radio" name="item" value="paper" />
		<img class="rpslogo" src="images/paper.png">
	</label>

	<label>
		<input type="radio" name="item" value="scissor" />
		<img class="rpslogo" src="images/scissor.png">
	</label>
<br>
<br>
	<input type="submit" name="Submit">
</form>

<?php include ($directory . 'includes/header.php');?>