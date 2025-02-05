<?php

class PokemonModel extends bdd{}

public function __construct {
    parent::__construct();
}

public function findALl():array
{
    $Pokemon=$this->co->prepare('SELECT * FROM Pokemon');
    $users->execute();

    return $Pokemon->fetchall
}

public function 
class Attaque extends pokemon{
    switch($this->type1){
        case 'FEU':
            public function lanceFlamme(){
                
            }
        case 'EAU':
            public function Hydrocanon(){
                
            }
        case 'PLANTE':
            public function MegaFouet(){
                
            }
    }

}