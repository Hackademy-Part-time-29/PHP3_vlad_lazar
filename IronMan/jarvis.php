<?php

class Jarvis{
    public $sarcasmo;

    public function __construct($sarcasmo){
        $this->sarcasmo=$sarcasmo;
    }
    public function livelloSarcasmo(){
        echo "Jarvis è stronzo al $this->sarcasmo%";
    }
}