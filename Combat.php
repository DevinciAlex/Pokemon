<?php

class private combat{
    private Pokemon $Pokemon1;
    private Pokemon $Pokemon2;
}

public function DemarrerCombat(int $value){
    while ($Pokemon1->PV!=0 or $Pokemon2->PV!=0) {
        TourDeCombat($Pokemon1,$Pokemon2)
    }
    Vainqueur($Pokemon1,$Pokemon2);
}

public function TourDeCombat($Pokemon1,$Pokemon2){
    $vitcheck = $Pokemon1->getvit() - $Pokemon2->getvit();
    if ($vitcheck>0) {
        $Pokemon1->attaque();
    }
    elseif ($vitcheck<0) {
        $Pokemon2->attaque();
    }
    else {
        $Tie=rand(0,1);
    }
        if ($Tie==0) {
            $Pokemon1->attaque();
        }
        else {
            $Pokemon2->attaque();
        }
    return;
}

public function attaque($Pokemon1, $Pokemon2){
    degat($Pokemon1, $Pokemon2);

    if ($Pokemon2->getPV()==0){
        return;
    else {
        degat($Pokemon2, $Pokemon1);
    }
    return;
    }
}
public function Vainqueur(){

}

public function degat(){
    x=random_int(0.85;1)
    (50*0.4)+2)/x
}