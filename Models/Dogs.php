<?php
include __DIR__.'/Genre.php';
class Dogs{

    public
    $name,$type,$material,$price;

    function __construct(string $name ='', string $type='', string $material='', string $price='', Genre $genre){
        $this->name = $name;
        $this->type = $type;
        $this->material = $material;
        $this->price = $price;
        $this->genre = $genre;
    }

}