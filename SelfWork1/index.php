<?php

require_once('class.php')

class Post {
    public $titolo;
    public $categoria;
    public $tag;

    public function __construct($titolo,$categoria,$tag){
        $this->titolo=$titolo;
        $this->categoria=$categoria;
        $this->tag=$tag;
    }
}
$storia=new Storia('Categoria','Storia');
