<?php

    $xTurn = array (
        0=>"&0=X", 1=>"&1=X", 2=>"&2=X", 3=>"&3=X", 4=>"&4=X", 5=>"&5=X", 6=>"&6=X", 7=>"&7=X", 8=>"&8=X");

    $oTurn = array (
        0=>"&0=O", 1=>"&1=O", 2=>"&2=O", 3=>"&3=O", 4=>"&4=O", 5=>"&5=O", 6=>"&6=O", 7=>"&7=O", 8=>"&8=O");

    if(end($_GET) == "X") {
        $turn = $oTurn;
    } else{
        $turn = $xTurn;
    }


    $xWin = array(
            array(0=>"X", 1=>"X", 2=>"X"),
            array(3=>"X", 4=>"X", 5=>"X"),
            array(6=>"X", 7=>"X", 8=>"X"),
            array(0=>"X", 3=>"X", 6=>"X"),
            array(1=>"X", 4=>"X", 7=>"X"),
            array(2=>"X", 5=>"X", 8=>"X"),
            array(0=>"X", 4=>"X", 8=>"X"),
            array(2=>"X", 4=>"X", 6=>"X")
        );

    $oWin = array(
            array(0=>"O", 1=>"O", 2=>"O"),
            array(3=>"O", 4=>"O", 5=>"O"),
            array(6=>"O", 7=>"O", 8=>"O"),
            array(0=>"O", 3=>"O", 6=>"O"),
            array(1=>"O", 4=>"O", 7=>"O"),
            array(2=>"O", 5=>"O", 8=>"O"),
            array(0=>"O", 4=>"O", 8=>"O"),
            array(2=>"O", 4=>"O", 6=>"O")
        );

    function checkWin($GET, $xWin, $oWin) {
        $GET = $_GET;
        $winner= "";
        foreach ($xWin as $arrayWin) {
            if (array_intersect_assoc($GET, $arrayWin) == $arrayWin) {
                if ($winner === ""){
                    $winner = "Player 1 Wins!";
                }
            }
        }
        foreach ($oWin as $arrayWin) {
            if (array_intersect_assoc($GET, $arrayWin) == $arrayWin) {
                if ($winner === ""){
                    $winner = "Player 2 Wins!";
                }
            }
        }
        return $winner;
    }

?>