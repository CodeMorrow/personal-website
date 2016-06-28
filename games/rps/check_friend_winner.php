<?php $thisPage = "Rock Paper Scissors";?>
<?php $directory = "../../"; ?>

<?php include ($directory . 'includes/header.php');?>

<?php 

    $Player1 = $_GET["item1"];
    $Player2 = $_GET["item2"];

function outcome($Player1, $Player2){

    if($Player1 == $Player2) {
        return "It was a Tie.";
    
    } elseif($Player1 == 'Rock' && $Player2 == 'Scissors'){
        return "Player 1! Player one chose Rock while Player 2 chose Scissors.";
    
    } elseif($Player1 == 'Rock' && $Player2 == 'Paper'){
        return "Player 2! Player 2 chose Paper while Player 1 chose Rock.";
    
    } elseif($Player1 == 'Scissors' && $Player2 == 'Rock'){
        return "Player 2! Player 2 chose Rock while Player 1 chose Scissors.";
    
    } elseif($Player1 == 'Scissors' && $Player2 == 'Paper'){
        return "Player 1! Player one chose Scissors while Player 2 chose Paper.";

    } elseif($Player1 == 'Paper' && $Player2 == 'Rock'){
        return "Player 1! Player one chose Paper while Player 2 chose Rock.";

    } elseif($Player1 == 'Paper' && $Player2 == 'Scissors'){
        return "Player 2! Player 2 chose Scissors while Player 1 chose Paper.";
    }
    return outcome;
}
?>

<h3>And the Winner is...</h3>

<p><?php echo outcome($Player1,$Player2); ?></p>

<?php include ($directory . 'includes/footer.php');?>