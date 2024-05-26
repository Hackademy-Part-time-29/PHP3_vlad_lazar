<?php

class Raggi{
    public $potenza;

    public function __construct($potenza){
        $this->potenza=$potenza;
    }
    public function potenzaRaggi(){
        echo "I raggi laser hanno una potenza di $this->potenza";
    }
}