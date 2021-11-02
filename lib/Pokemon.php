<?php
declare(strict_types=1);

class Pokemon
{
    private $input;
    private $url;
    private $data;

    public function __construct($inputValue, $endpoint) {
        $this -> input = $inputValue;
        $id = $this -> input;

        $this -> url = "https://pokeapi.co/api/v2/$endpoint/$id/";
        $url = $this -> url;

        $this -> data = getData($url);
    }

    public function data()
    {
        return $this -> data;
    }

    public function name()
    {
        $data = $this -> data();
        $this -> name = $data['name'];

        return $this -> name;
    }

    public function specieName()
    {
        $data = $this -> data();
        $this -> name = $data['species']['name'];

        return $this -> name;
    }

    public function id()
    {
        $data = $this -> data();
        $this -> id = $data['id'];

        return $this -> id;
    }

    public function img()
    {
        $data = $this -> data();
        $this -> img = $data['sprites']['front_default'];
        return $this -> img;
    }

    public function moves()
    {
        $data = $this -> data();
        $this -> moves = $data['moves'];

        return $this -> moves;
    }
}