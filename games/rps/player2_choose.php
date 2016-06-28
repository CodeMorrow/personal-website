<?php $thisPage = "Rock Paper Scissors";?>
<?php $directory = "../../"; ?>

<?php include ($directory . 'includes/header.php');?>

<p class="rpsSelectItem"><strong><em id="player2SelectItem">Player 2</em></strong> Please Select Your Item</p>

<form action="player2_choose.php">
	
	<label id="rpslogo2">
		<input type="radio" name="item" value="rock" />
		<img class="rpslogo" src="images/rock.png">
	</label>

	<label id="rpslogo2">
		<input type="radio" name="item" value="paper" />
		<img class="rpslogo" src="images/paper.png">
	</label>

	<label id="rpslogo2">
		<input type="radio" name="item" value="scissor" id="rpslogo2" />
		<img class="rpslogo" src="images/scissor.png">
	</label>
<br>
<br>
	<input type="submit" name="Submit">
</form>

<?php include ($directory . 'includes/footer.php');?>