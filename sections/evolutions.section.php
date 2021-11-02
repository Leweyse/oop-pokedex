<?php
declare(strict_types=1);

function evolutionSection($arr) {
    if (isset($arr)) {
        foreach ($arr as $pokemon) {
        $name = $pokemon['name'];
        $img = $pokemon['sprites']['front_default'];
        $id = $pokemon['id'];

        infoComponent($name, $img, $id);
        }
}
}