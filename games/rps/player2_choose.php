<?php $thisPage = "Rock Paper Scissors";?>
<?php $directory = "../../"; ?>

<?php include ($directory . 'includes/header.php');?>

<p class="rpsSelectItem"><strong><em id="player2SelectItem">Player 2</em></strong> Please Select Your Item</p>

<form action="check_friend_winner.php">
	
	<label id="rpslogo2">
		<input type="radio" name="item" value="Rock" />
		<img class="rpslogo" src="images/rock.png">
	</label>

	<label id="rpslogo2">
		<input type="radio" name="item" value="Raper" />
		<img class="rpslogo" src="images/paper.png">
	</label>

	<label id="rpslogo2">
		<input type="radio" name="item" value="Scissors" />
		<img class="rpslogo" src="images/scissor.png">
	</label>
<br>
<br>
	<button type="submit" name="Submit">Shoot!</button>
</form>

<?php include ($directory . 'includes/footer.php');?>