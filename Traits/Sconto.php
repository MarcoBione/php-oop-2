<?php

trait Sconto {
    public $sconto;

    public function setSconto($genre){
        if($genre === 'cani'){
            return $this->sconto = '-3€';
        }else{
        return 'nessuno sconto per te!';
        }
    }
}