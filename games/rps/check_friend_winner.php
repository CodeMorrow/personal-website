<?php $thisPage = "Rock Paper Scissors";?>
<?php $directory = "../../"; ?>

<?php include ($directory . 'includes/_top.php');?>

<?php 

    $Player1 = $_GET["item1"];
    $Player2 = $_GET["item2"];

/*function outcome($Player1, $Player2){

    if($Player1 == $Player2) {
        return "It was a Tie.";
    
    } elseif($Player1 == 'Rock' && $Player2 == 'Scissors'){
        return "<strong id=\"player1SelectItem\">Player 1!</strong> Player 1 chose Rock while Player 2 chose Scissors.";
    
    } elseif($Player1 == 'Rock' && $Player2 == 'Paper'){
        return "<strong id=\"player2SelectItem\">Player 2!</strong> Player 2 chose Paper while Player 1 chose Rock.";
    
    } elseif($Player1 == 'Scissors' && $Player2 == 'Rock'){
        return "<strong id=\"player2SelectItem\">Player 2!</strong> Player 2 chose Rock while Player 1 chose Scissors.";
    
    } elseif($Player1 == 'Scissors' && $Player2 == 'Paper'){
        return "<strong id=\"player1SelectItem\">Player 1!</strong> Player 1 chose Scissors while Player 2 chose Paper.";

    } elseif($Player1 == 'Paper' && $Player2 == 'Rock'){
        return "<strong id=\"player1SelectItem\">Player 1!</strong> Player 1 chose Paper while Player 2 chose Rock.";

    } elseif($Player1 == 'Paper' && $Player2 == 'Scissors'){
        return "<strong id=\"player2SelectItem\">Player 2!</strong> Player 2 chose Scissors while Player 1 chose Paper.";
    }
    return outcome;
}*/

function outcome($Player1, $Player2){
    if($Player1 == $Player2) {
        return "It was a Tie. Player 1 and the Player 2 both chose" . $Player1 . ".";
    } 

    elseif($Player1 == 'Rock' && $Player2 == 'Scissors' ||
         $Player1 == 'Scissors' && $Player2 == 'Paper' ||
         $Player1 == 'Paper' && $Player2 == 'Rock'){
            return "<strong id=\"player1SelectItem\">Player 1!</strong> Player 1 chose " . $Player1 ." and Player 2 chose " . $Player2. ".";
    }

    elseif($Player2 == 'Rock' && $Player1 == 'Scissors' ||
         $Player2 == 'Scissors' && $Player1 == 'Paper' ||
         $Player2 == 'Paper' && $Player1 == 'Rock'){
            return "<strong id=\"player2SelectItem\">The Player2!</strong> Player 2 chose " . $Player2 . " and Player 1 chose " . $Player1 . ".";
    }
    return outcome;
}



?>

<h3>And the Winner is...</h3>

<p><?php echo outcome($Player1,$Player2); ?></p>

<input class="rpsbutton" type="button" name="playagain" value="Play Again" onclick="document.location.href='index.php'"/>

<?php include ($directory . 'includes/_bottom.php');?>