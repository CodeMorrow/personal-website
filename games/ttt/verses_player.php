<?php $thisPage = "Tic-Tac-Toe";?>
<?php $directory = "../../"; ?>

<?php include ($directory . 'includes/_top.php');?>

<br>

<h3 class="ticTacToe__title">Player 1 vs. Player 2</h3>

<br>
<!-- Tic Tac Toe Board -->
<div class="board ticTacToe">
	<div class="ticTacToe__column">
		<div class="ticTacToe__square"></div>
		<div class="ticTacToe__square"></div>
		<div class="ticTacToe__square"></div>
	</div>

	<div class="ticTacToe__column">
		<div class="ticTacToe__square"></div>
		<div class="ticTacToe__square"></div>
		<div class="ticTacToe__square"></div>
	</div>

	<div class="ticTacToe__column">
		<div class="ticTacToe__square"></div>
		<div class="ticTacToe__square"></div>
		<div class="ticTacToe__square"></div>
	</div>
</div>

<div>
	<div class="ticTacToe__info">
  	<div class="ticTacToe__results">Win = 0</div><br>
    <div class="ticTacToe__results">Loss = 0</div><br>
    <div class="ticTacToe__results">Draw = 0</div><br>
</div>

<?php include ($directory . 'includes/_bottom.php');?>