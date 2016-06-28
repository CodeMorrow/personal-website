<?php

	$Player1 = 

    $Player2 =

?>

<?php

function outcome($Player1, $Player2){
    if($Player == $Player2) {
        return 'It was a Tie.';
    
    } elseif($Player == 'Rock' && $Player2 == 'Scissors'){
        return "You! The computer chose Scissors.";
    
    } elseif($Player == 'Rock' && $Player2 == 'Paper'){
        return "The Computer! The computer chose Paper.";
    
    } elseif($Player == 'Scissors' && $Player2 == 'Rock'){
        return "The Computer! The computer chose Rock.";
    
    } elseif($Player == 'Scissors' && $Player2 == 'Paper'){
        return "You! The computer chose Paper.";

    } elseif($Player == 'Paper' && $Player2 == 'Rock'){
        return "You! The computer chose Rock.";

    } elseif($Player == 'Paper' && $Player2 == 'Scissors'){
        return "The Computer! The computer chose Scissors.";
    }
    return outcome;
}
?>