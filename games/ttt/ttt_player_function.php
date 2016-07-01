<?php

$Player1 = array();
$Player2 = array();

//Check whose turn it is.
function whoseTurn(){
	while(gameEnded == false)
	{
	    if(i%2 == 0)
	    {
	    	computerTurn();
	        playerTurn();
	    }
	    if(i%2 == 1)
	    {            
	        playerTurn();
	        computerTurn();
	    }
	    i++;
	}
}


// check three values to see if they are the same. If so, we have a winner.
function three_in_a_row($chOne, $chTwo, $chThree){
	if (($chOne == $chTwo) && ($chOne == $chThree)) {
		return true;
	}
	return false;
}

function gameEnded(grid[][3]) {
	// loop through the rows
	for (1=0; i<3; i++){
		if(three_in_a_row(grid[i][0], grid[i][1], grid[i][2])){
			return true;
		}
	}
	// loop through the columns
	for (int i = 0; i < 3; i++){
		if (three_in_a_row((grid[0][i], grid[1][i], grid[2][i])){
			return true;
		}
	}
	// check diagonals
	if (three_in_a_row((grid[0][0], grid[1][1], grid[2][2])){
	return true;
	}

	if (three_in_a_row((grid[0][2], grid[1][1], grid[2][0])){
	return true;
	}
return false;
}
?>