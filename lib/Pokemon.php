<?php
declare(strict_types=1);

class Pokemon extends Data
{
    public function __construct($id) {
        $this -> data = parent::data($id, "pokemon");
    }

    public function specieName()
    {
        return $this -> data['species']['name'];
    }

    public function name()
    {
        return $this -> data['name'];
    }

    public function id()
    {
        return $this -> data['id'];
    }

    public function img()
    {
        return $this -> data['sprites']['front_default'];
    }

    public function moves()
    {
        return $this -> data['moves'];
    }
}