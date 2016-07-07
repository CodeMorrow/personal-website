<?php $thisPage = "Tic-Tac-Toe";?>
<?php $directory = "../../"; ?>
<?php include ($directory . 'includes/_top.php');?>
<?php include "ttt_player_function.php";?>
<br>

<h3 class="ticTacToe__title">Player 1 (X) vs. Player 2 (O)</h3>

<p><?php echo turnStatus($_GET);?></p>

<br>
<!-- Tic Tac Toe Board --> 
<div class="board ticTacToe">
	<div class="ticTacToe__row">
		<a href="<?php if(($_GET[0]=='X') || ($_GET[0] == 'O')){} else{echo "?".$_SERVER['QUERY_STRING']; echo $turn[0];}; ?>"><div class="ticTacToe__square" id="box0"><?php echo $_GET[0]; ?></div></a>
		<a href="<?php if(($_GET[1]=='X') || ($_GET[1] == 'O')){} else{echo "?".$_SERVER['QUERY_STRING']; echo $turn[1];}; ?>"><div class="ticTacToe__square" id="box1"><?php echo $_GET[1]; ?></div></a>
		<a href="<?php if(($_GET[2]=='X') || ($_GET[2] == 'O')){} else{echo "?".$_SERVER['QUERY_STRING']; echo $turn[2];}; ?>"><div class="ticTacToe__square" id="box2"><?php echo $_GET[2]; ?></div></a>
	</div>

	<div class="ticTacToe__row">
		<a href="<?php if(($_GET[3]=='X') || ($_GET[3] == 'O')){} else{echo "?".$_SERVER['QUERY_STRING']; echo $turn[3];}; ?>"><div class="ticTacToe__square" id="box3"><?php echo $_GET[3]; ?></div></a>
		<a href="<?php if(($_GET[4]=='X') || ($_GET[4] == 'O')){} else{echo "?".$_SERVER['QUERY_STRING']; echo $turn[4];}; ?>"><div class="ticTacToe__square" id="box4"><?php echo $_GET[4]; ?></div></a>
		<a href="<?php if(($_GET[5]=='X') || ($_GET[5] == 'O')){} else{echo "?".$_SERVER['QUERY_STRING']; echo $turn[5];}; ?>"><div class="ticTacToe__square" id="box5"><?php echo $_GET[5]; ?></div></a>
	</div>

	<div class="ticTacToe__row">
		<a href="<?php if(($_GET[6]=='X') || ($_GET[6] == 'O')){} else{echo "?".$_SERVER['QUERY_STRING']; echo $turn[6];}; ?>"><div class="ticTacToe__square" id="box6"><?php echo $_GET[6]; ?></div></a>
		<a href="<?php if(($_GET[7]=='X') || ($_GET[7] == 'O')){} else{echo "?".$_SERVER['QUERY_STRING']; echo $turn[7];}; ?>"><div class="ticTacToe__square" id="box7"><?php echo $_GET[7]; ?></div></a>
		<a href="<?php if(($_GET[8]=='X') || ($_GET[8] == 'O')){} else{echo "?".$_SERVER['QUERY_STRING']; echo $turn[8];}; ?>"><div class="ticTacToe__square" id="box8"><?php echo $_GET[8]; ?></div></a>
	</div>
</div>

<div>
	<div class="ticTacToe__info">
	  	<div class="ticTacToe__results">Player 1 Win = 0</div><br>
	    <div class="ticTacToe__results">Player 2 Win = 0</div><br>
	    <div class="ticTacToe__results">Cat's Game = 0</div><br>
	</div>
</div>


<br>

<div class="ticTacToe__winner"><?php echo checkWin($GET,$xWin,$oWin); ?></div>

<div><a href="index.php">Play Again?</a></div>




<?php include ($directory . 'includes/_bottom.php');?>