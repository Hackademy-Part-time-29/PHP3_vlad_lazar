<?php

class Propulsori{
    public $statoPropulsori;
    
    public function __construct($statoPropulsori){
        $this->statoPropulsori=$statoPropulsori;
    }
    public function propulsoriAccesi(){
        echo "I propulsori sono accesi";
    }
}