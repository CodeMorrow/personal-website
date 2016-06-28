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

<h3>And the Winner is...</h3>

<p><?php echo outcome($Player,$Computer); ?></p>

<?php include ($directory . 'includes/footer.php');?>