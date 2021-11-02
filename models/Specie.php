<?php
declare(strict_types=1);

class Specie extends Data
{
    private $ids = [];

    public function __construct($id) {
        $this -> data = parent::data($id, "pokemon-species");
    }

    public function evolutionUrl()
    {
        return $this -> data['evolution_chain']['url'];
    }

    public function specieId($arr)
    {
        foreach ($arr -> data as $key) {
            if (is_array($key)) {
                array_push($this -> ids, $key['id']);
            }
        }

        return $this -> ids;
    }
}