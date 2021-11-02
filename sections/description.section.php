<?php
declare(strict_types=1);

function leftSection($arr) {
    $name = $arr['name'];
    $id = $arr['id'];
    $moves = $arr['moves'];
    $img = $arr['sprites']['front_default'];

    echo "<div class='top_left'>";
        infoComponent($name, $img, $id);
    echo "</div>
        <div class='bottom_left'>";
        movesSection($moves);
    echo "</div>";
}
