<?php
declare(strict_types=1);

class Data
{
    private $url;

    public function data($id, $endpoint)
    {
        if (gettype($id) != "array") {
            $this -> url = "https://pokeapi.co/api/v2/$endpoint/$id/";
            $this -> data = getData($this -> url);
            return $this -> data;
        } else {
            $this -> data = getMultiData($id, $endpoint);
            return $this -> data;
        }
    }
}