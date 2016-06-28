<?php $thisPage = "Rock Paper Scissor";?>
<?php $directory = "../../"; ?>

<?php include ($directory . 'includes/header.php');?>

<p class="rpsSelectItem"><strong><em id="player1SelectItem">Player 1</em></strong> Please Select Your Item</p>

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

<?php include ($directory . 'includes/footer.php');?>