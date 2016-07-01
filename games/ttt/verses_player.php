<?php $thisPage = "Tic-Tac-Toe";?>
<?php $directory = "../../"; ?>

<?php include ($directory . 'includes/_top.php');?>


<br>

<h3 class="ticTacToe__title">Player 1 vs. Player 2</h3>

<p>It's (playerX) turn.</p>

<br>
<!-- Tic Tac Toe Board --> 
<div class="board ticTacToe">
	<div class="ticTacToe__row">
		<input class="ticTacToe__square" id="box0" value="0">
		<input class="ticTacToe__square" id="box1" value="1">
		<input class="ticTacToe__square" id="box2" value="2">
	</div>

	<div class="ticTacToe__row">
		<input class="ticTacToe__square" id="box3" value="3">
		<input class="ticTacToe__square" id="box4" value="4">
		<input class="ticTacToe__square" id="box5" value="5">
	</div>

	<div class="ticTacToe__row">
		<input class="ticTacToe__square" id="box6" value="6">
		<input class="ticTacToe__square" id="box7" value="7">
		<input class="ticTacToe__square" id="box8" value="8">
	</div>
</div>

<div>
	<div class="ticTacToe__info">
	  	<div class="ticTacToe__results">Win = 0</div><br>
	    <div class="ticTacToe__results">Loss = 0</div><br>
	    <div class="ticTacToe__results">Draw = 0</div><br>
	</div>
</div>

<br>

<input type="button" name="submit" value="Check the board and Move on">





<?php include ($directory . 'includes/_bottom.php');?>