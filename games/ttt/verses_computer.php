<?php $thisPage = "Tic-Tac-Toe";?>
<?php $directory = "../../"; ?>

<?php include ($directory . 'includes/_top.php');?>

<br>

<h3 class="ticTacToe__title">Player vs. Computer</h3>

<br>
<!-- Tic Tac Toe Board -->
<div class="board ticTacToe">
	<div class="ticTacToe__row">
		<div class="ticTacToe__square" id="box0">0</div>
		<div class="ticTacToe__square" id="box1">1</div>
		<div class="ticTacToe__square" id="box2">2</div>
	</div>

	<div class="ticTacToe__row">
		<div class="ticTacToe__square" id="box3">3</div>
		<div class="ticTacToe__square" id="box4">4</div>
		<div class="ticTacToe__square" id="box5">5</div>
	</div>

	<div class="ticTacToe__row">
		<div class="ticTacToe__square" id="box6">6</div>
		<div class="ticTacToe__square" id="box7">7</div>
		<div class="ticTacToe__square" id="box8">8</div>
	</div>
</div>

<div>
	<div class="ticTacToe__info">
  	<div class="ticTacToe__results">Win  =</div><br>
    <div class="ticTacToe__results">Loss =</div><br>
    <div class="ticTacToe__results">Draw =</div><br>
</div>


<?php include ($directory . 'includes/_bottom.php');?>