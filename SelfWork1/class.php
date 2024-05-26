<?php

//Traccia 1

abstract class Category{
    protected $category;

    public function __construct($category){
        $this->category=$category;
    
}
}

class Attualità extends Category{
    protected $attualità;

    public function __construct($category,$attualità){
        parent::__construct($category);
        $this->attualità=$attualità;
    }
    public function getMyCategory(){
        return $this->attualità;
    }
    public function showCategory(){
        echo "La categoria è ".$this->getMyCategory();
    }

}
class Sport extends Category{
    protected $sport;

    public function __construct($category,$sport){
        parent::__construct($category);
        $this->sport=$sport;
    }
    public function getMyCategory(){
        return $this->sport;
    }
    public function showCategory(){
        echo "La categoria è ".$this->getMyCategory();
    }

}
class Gossip extends Category{
    protected $gossip;

    public function __construct($category,$gossip){
        parent::__construct($category);
        $this->gossip=$gossip;
    }
    public function getMyCategory(){
        return $this->gossip;
    }
    public function showCategory(){
        echo "La categoria è ".$this->getMyCategory();
    }

}
class Storia extends Category{
    protected $storia;

    public function __construct($category,$storia){
        parent::__construct($category);
        $this->storia=$storia;
    }
    public function getMyCategory(){
        return $this->storia;
    }
    public function showCategory(){
        echo "La categoria è ".$this->getMyCategory();
    }

}


$attualità=new Attualità('Categoria','Attualità');
$attualità->showCategory();