<?php $thisPage = "Tic-Tac-Toe";?>
<?php $directory = "../../"; ?>

<?php include ($directory . 'includes/_top.php');?>
	
	<form class="number_of_players">

		<h3>Please select how many players will play.</h3>
				
				<input class="rpsbutton" type="button" name="verses" value="1 PLAYER" onclick="document.location.href='verses_computer.php'">
			<br>
			<br>
				<input class="rpsbutton" type="button" name="verses" value="2 PLAYERS" onclick="document.location.href='verses_player.php'">
				
			</form>

		<br>
	<img id="ttt" src="images/ttt.png" alt="Tic Tac Toe" width="250">


<?php include ($directory . 'includes/_bottom.php');?>
