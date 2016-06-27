<?php $thisPage = "Rock Paper Scissors";?>
<?php $directory = "../../"; ?>

<?php include ($directory . 'includes/header.php');?>

	<div class="box">

		<h3>Please Select How many players will play.</h3>

		<img id="rps" src="images/rps.png" alt="Rock Paper Scissor Diagram" width="250">
			<br>
			
			<form>
				<input type="radio" name="verses" value="friend" onclick="document.location.href='twoPlayers.php'">I have a friend
			<br>
				<input type="radio" name="verses" value="computer" onclick="document.location.href='onePlayer.php'">I am alone....forever :(
			</form>

	</div>
<?php include ($directory . 'includes/footer.php');?>