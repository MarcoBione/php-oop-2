<?php
include __DIR__.'/Genre.php';
class Dogs{

    public
    $name,$type,$material,$price,$genre, $img;

    function __construct(string $name ='', string $type='', string $material='', string $price='', Genre $genre, string $img){
        $this->name = $name;
        $this->type = $type;
        $this->material = $material;
        $this->price = $price;
        $this->genre = $genre;
        $this->img = $img;
    }

}