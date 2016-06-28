<?php $thisPage = "Rock Paper Scissors";?>
<?php $directory = "../../"; ?>

<?php include ($directory . 'includes/header.php');?>

	<div class="box">

		<h3>Please select how many players will play.</h3>
			
			<form class="number_of_players">
				
				<input class="rpsbutton" type="button" name="verses" value="1 PLAYER" onclick="document.location.href='onePlayer.php'">
			<br>
			<br>
				<input class="rpsbutton" type="button" name="verses" value="2 PLAYERS" onclick="document.location.href='player1_choose.php'">
				
			</form>

		<br>

			<img id="rps" src="images/rps.png" alt="Rock Paper Scissor Diagram" width="250">

	</div>
<?php include ($directory . 'includes/footer.php');?>