<?php
include __DIR__.'/Genre.php';
class Cats{

    public
    $name,$type,$material,$price,$genre;

    function __construct(string $name='', string $type='', string $material='', string $price='', Genre $genre){
        $this->name = $name;
        $this->type = $type;
        $this->material = $material;
        $this->price = $price;
        $this->genre = $genre;
    }

}