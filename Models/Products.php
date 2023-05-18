<?php
include __DIR__.'/Genre.php';
class Products{

    public
    $name,$type,$material,$price,$genre,$img, $sconto;

    function __construct(string $name ='', string $type='', string $material='', string $price='', Genre $genre, string $img, string $sconto =''){
        $this->name = $name;
        $this->type = $type;
        $this->material = $material;
        $this->price = $price;
        $this->genre = $genre;
        $this->img = $img;
        $this->sconto = $sconto;
    }

}