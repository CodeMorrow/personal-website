<?php $thisPage = "Rock Paper Scissors";?>
<?php $directory = "../../"; ?>

<?php include ($directory . 'includes/_top.php');?>

<p class="rpsSelectItem"><strong><em id="player1SelectItem">Player 1</em></strong> Please Select Your Weapon</p>

<form action="player2_choose.php">
	
	<label>
		<input type="radio" name="item1" value="Rock" />
		<img class="rpslogo" src="images/rock.png">
	</label>

	<label>
		<input type="radio" name="item1" value="Paper" />
		<img class="rpslogo" src="images/paper.png">
	</label>

	<label>
		<input type="radio" name="item1" value="Scissors" />
		<img class="rpslogo" src="images/scissor.png">
	</label>
<br>
<br>
	<input type="submit" name="submit" value="Next" class="rpsbutton">
</form>

<?php include ($directory . 'includes/_bottom.php');?>