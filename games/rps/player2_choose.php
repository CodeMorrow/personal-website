<?php $thisPage = "Rock Paper Scissors";?>
<?php $directory = "../../"; ?>

<?php include ($directory . 'includes/_gameTop.php');?>

<p class="rpsSelectItem"><strong><em id="player2SelectItem">Player 2</em></strong> Please Select Your Weapon</p>

<form action="check_friend_winner.php">

<!-- Hidden input type -->
<input type="hidden" name="item1" value="<?php echo $_GET["item1"]?>"/>
	
	<label id="rpslogo2">
		<input type="radio" name="item2" value="Rock" />
		<img class="rpslogo" src="images/rock.png">
	</label>

	<label id="rpslogo2">
		<input type="radio" name="item2" value="Paper" />
		<img class="rpslogo" src="images/paper.png">
	</label>

	<label id="rpslogo2">
		<input type="radio" name="item2" value="Scissors" />
		<img class="rpslogo" src="images/scissor.png">
	</label>
<br>
<br>
	<input type="submit" name="Submit" value ="Rock, Paper, Scissors, Shoot!" class="rpsbutton"/>
</form>

<?php include ($directory . 'includes/_bottom.php');?>