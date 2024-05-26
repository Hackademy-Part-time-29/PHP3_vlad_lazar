<?php

class Reattore{
    public $numeroSoli;

    public function __construct($numeroSoli){
        $this->numeroSoli=$numeroSoli;
    }
    public function potenzaReattore(){
        echo "Il reattore Ark ha una potenza di $this->numeroSoli soli";
    }
}