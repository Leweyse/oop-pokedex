<?php
declare(strict_types=1);

class Evolution extends Data
{
    private $names = [];
    private $evolChain = [];

    public function __construct($url) {
        $this -> data = getData($url);
    }

    public function evolutionName()
    {
        array_push($this -> names, $this -> data['chain']['species']['name']);

        foreach ($this -> data['chain']['evolves_to'] as $key) {
            array_push($this -> names, $key['species']['name']);
            array_push($this -> evolChain, $key['evolves_to']);
        }

        foreach ($this -> evolChain as $key) {
            if (count($key) > 0) {
                array_push($this -> names, $key[0]['species']['name']);
            }
        }

        return $this -> names;
    }
}