<?php
declare(strict_types=1);

$inputValue = $pokemon = $specie = $evolution = $evolSpecies = $evolPokemon = null;

require 'lib/Data.php';
require 'lib/Pokemon.php';
require 'lib/Specie.php';
require 'lib/Evolution.php';

include "components/info.component.php";
include "components/moves.component.php";
include "components/error.component.php";

include "helpers/test_input.php";
include "helpers/getData.php";
include "helpers/getMultiData.php";

include "sections/moves.section.php";
include "sections/description.section.php";
include "sections/evolutions.section.php";

if($_SERVER['REQUEST_METHOD']=='POST') {
    $inputValue = test_input($_POST["name"]);
}

if($inputValue != "") {
    $pokemon = new Pokemon($inputValue);

    if (isset($pokemon -> data)) {
        $specie = new Specie($pokemon -> specieName());
        $evolution = new Evolution($specie -> evolutionUrl());

        $evolSpecies = new Specie($evolution -> evolutionName());
        $evolPokemon = new Pokemon($evolSpecies -> specieId($evolSpecies));
    }
}

$default = [
    'name' => "Welcome to",
    'sprites' => ['front_default' => "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/eab4680c-8a08-4dc0-ad31-45b3099264f6/dcvq413-389db44a-9b98-4dc2-95a3-3fb2a35755c2.gif?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2VhYjQ2ODBjLThhMDgtNGRjMC1hZDMxLTQ1YjMwOTkyNjRmNlwvZGN2cTQxMy0zODlkYjQ0YS05Yjk4LTRkYzItOTVhMy0zZmIyYTM1NzU1YzIuZ2lmIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.aDgpHmtkjDCcXf8fwkt-KaEX18m6Qp7Sjh3IXZzBEkQ"],
    'id' => "your pokedex",
    'moves' => "Search your pokemon!"
];

require 'public/view.php';