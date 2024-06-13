<?php

$contestants = array (
    array("Bill", null, null),
    array("Bob", null, null),
    array("Ben", null, null),
    array("Boris", null, null),
);
$i = 0;

foreach ($contestants as $player) {
    $gamesPlayed = rand(1, 4);
    $gameScore = rand(1, 4);
    $player[1] = $gamesPlayed;
    $player[2] = $gameScore;
    $contestants[$i] = $player;
    $i++;
}

function getWinner($contestants) {
    usort($contestants, function($a, $b) {
        return $b[1] <=> $a[1];
    });
    
    usort($contestants, function($a, $b) {
        return $b[2] <=> $a[2];
    });
    
    echo("The winner is ".$contestants[0][0]." with a score of ".$contestants[0][2]." g/p:".$contestants[0][1]."\n");
    echo("2nd place is ".$contestants[1][0]." with a score of ".$contestants[1][2]." g/p:".$contestants[1][1]."\n");
    echo("3rd place is ".$contestants[2][0]." with a score of ".$contestants[2][2]." g/p:".$contestants[2][1]."\n");
    echo("last place is ".$contestants[3][0]." with a score of ".$contestants[3][2]." g/p:".$contestants[3][1]."\n");
}

getWinner($contestants);
?>