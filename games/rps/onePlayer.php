<?php $thisPage = "Rock Paper Scissors";?>
<?php $directory = "../../"; ?>

<?php include ($directory . 'includes/header.php');?>

<h3>Please Select Your Weapon</h3>

<form action="computer_outcome.php">
	
	<label>
		<input type="radio" name="item" value="Rock" />
		<img class="rpslogo" src="images/rock.png">
	</label>

	<label>
		<input type="radio" name="item" value="Paper" />
		<img class="rpslogo" src="images/paper.png">
	</label>

	<label>
		<input type="radio" name="item" value="Scissors" />
		<img class="rpslogo" src="images/scissor.png">
	</label>
<br>
<br>
	<input type="submit" name="submit" value="Rock, Paper, Scissors, SHOOT!" class="rpsbutton">
</form>

<?php include ($directory . 'includes/footer.php');?>