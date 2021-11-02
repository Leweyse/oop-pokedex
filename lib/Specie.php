<?php
declare(strict_types=1);

class Specie extends Pokemon
{
    private $ids = [];

    public function getSpecieId($arr)
    {
        foreach ($arr as $key) {
            if (is_array($key)) {
                array_push($this -> ids, $key['id']);
            }
        }

        return $this -> ids;
    }
}