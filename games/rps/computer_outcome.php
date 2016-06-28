<?php $thisPage = "Rock Paper Scissors";?>
<?php $directory = "../../"; ?>

<?php include ($directory . 'includes/header.php');?>

<?php 

	$ComputerChoice = array('Rock', 'Paper', 'Scissors');
	
	$Player = $_GET["item"];
	$Computer=$ComputerChoice[rand(0,2)];

function outcome($Player, $Computer){

    if($Player == $Computer) {
        return "It was a Tie.";
    
    } elseif($Player == 'Rock' && $Computer == 'Scissors'){
        return "<strong>You!</strong> You chose Rock and the computer chose Scissors.";
    
    } elseif($Player == 'Rock' && $Computer == 'Paper'){
        return "<strong>The Computer!</strong> The computer chose Paper and you chose Rock.";
    
    } elseif($Player == 'Scissors' && $Computer == 'Rock'){
        return "<strong>The Computer!</strong> The computer chose Rock and you chose Scissors.";
    
    } elseif($Player == 'Scissors' && $Computer == 'Paper'){
        return "<strong>You!</strong> You chose Scissors and the computer chose Paper.";

    } elseif($Player == 'Paper' && $Computer == 'Rock'){
        return "<strong>You!</strong> You chose Paper and the computer chose Rock.";

    } elseif($Player == 'Paper' && $Computer == 'Scissors'){
        return "<strong>The Computer!</strong> The computer chose Scissors and you chose Paper.";
    }
    return outcome;
}
?>

<h3>And the Winner is...</h3>

<p><?php echo outcome($Player,$Computer); ?></p>

<input class="rpsbutton" type="button" name="playagain" value="Play Again" onclick="document.location.href='index.php'"/>

<?php include ($directory . 'includes/footer.php');?>