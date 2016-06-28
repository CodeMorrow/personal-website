<?php
include("computer_outcome.php");

echo "\n\n\nTESTS BEGIN HERE\n";

echo "\nTesting that if you choose rock and the computer chooses rock, it's a tie.\n";
if(outcome("Rock", "Rock") == "It was a Tie."){
	echo "Success!\n";
} else {
	echo "Failure!\n";
}

echo "\nTesting that if you choose rock and the computer chooses scissors, you win.\n";
if(outcome("Rock", "Scissors") == "You! The computer chose Scissors."){
	echo "Success!\n";
} else {
	echo "Failure!\n";
}

echo "\nTesting that if you choose rock and the computer chooses scissors, you win.\n";
if(outcome("Scissors", "Rock") == "The Computer! The computer chose Rock."){
	echo "Success!\n";
} else {
	echo "Failure!\n";
}
?>