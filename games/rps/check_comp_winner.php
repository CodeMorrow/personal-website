<?php 
	
    $Player = $_GET['item'];

    $Choosefrom= array(Rock, Paper, Scissors);
    $Choice= rand(0,2);
    $Computer=$Choosefrom[$Choice];

function outcome($Player, $Computer){
    if($Player == $Computer) {
        return 'It was a Tie.';
    
    } elseif($Player == 'Rock' && $Computer == 'Scissors'){
        return "You! The computer chose Scissors.";
    
    } elseif($Player == 'Rock' && $Computer == 'Paper'){
        return "The Computer! The computer chose Paper.";
    
    } elseif($Player == 'Scissors' && $Computer == 'Rock'){
        return "The Computer! The computer chose Rock.";
    
    } elseif($Player == 'Scissors' && $Computer == 'Paper'){
        return "You! The computer chose Paper.";

    } elseif($Player == 'Paper' && $Computer == 'Rock'){
        return "You! The computer chose Rock.";

    } elseif($Player == 'Paper' && $Computer == 'Scissors'){
        return "The Computer! The computer chose Scissors.";
    }
    return outcome;
}
?>