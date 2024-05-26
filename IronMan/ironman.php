<?php

require_once('propulsori.php');
require_once('raggi_laser.php');
require_once('jarvis.php');
require_once('reattore.php');


class IronMan {
    public $statoPropulsori;
    public $potenza;
    public $sarcasmo;
    public $numeroSoli;
    public static $counter;

    public function __construct(Propulsori $statoPropulsori, Raggi $potenza, Jarvis $sarcasmo, Reattore $numeroSoli){
        $this->statoPropulsori->$statoPropulsori;
        $this->potenza->$potenza;
        $this->sarcasmo->$sarcasmo;
        $this->numeroSoli->$numeroSoli;
    }
    public static function counterArmy(){
        self::$counter++;
    }
    public function returnCounter(){
        return self::$counter;
    }
    public function counterIs(){
        echo "Il numero di Iron Man creati è".returnCounter();
    }
}

$propulsori=new Propulsori('Accesi');
$potenza=new Raggi(rand(50,200));
$jarvis=new Jarvis(rand(0,100));
$reattore= new Reattore(rand(0,10));

$ironman=new IronMan($propulsori,$potenza,$jarvis,$reattore);
$randN=rand(10,50);
$array_army=[];

for($i=0;$i<$randN;$i++){
    array_push($array_army, new IronMan($propulsori,$potenza,$jarvis,$reattore));
}

echo IronMan::counterIs();