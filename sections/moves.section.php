<?php
declare(strict_types=1);

function movesSection($arr) {
    $movesNum = 0;

    if (gettype($arr) != 'array') echo movesComponent($arr);
    else {
        if (count($arr) >= 4) $movesNum = 4;
        else $movesNum = count($arr);

        if ($movesNum == 1) echo movesComponent($arr[0]['move']['name']);
        else {
            if ($movesNum != 0) {
                $rand_move = array_rand($arr, $movesNum);

                foreach($rand_move as $idxMove) {
                    echo movesComponent($arr[$idxMove]['move']['name']);
                }
            } else return;
        }
    }
}