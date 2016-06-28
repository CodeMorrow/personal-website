<?php $thisPage = "Rock Paper Scissors";?>
<?php $directory = "../../"; ?>

<?php include ($directory . 'includes/header.php');?>

	<div class="box">

		<h3>Please select how many players will play.</h3>
			
			<form class="number_of_players">
				<input type="radio" name="verses" value="friend" onclick="document.location.href='twoPlayers.php'">I'd like to challenge a friend.
			<br>
			<br>
				<input type="radio" name="verses" value="computer" onclick="document.location.href='onePlayer.php'">I'd like to challenge the computer.
			</form>

		<br>

			<img id="rps" src="images/rps.png" alt="Rock Paper Scissor Diagram" width="250">

	</div>
<?php include ($directory . 'includes/footer.php');?>