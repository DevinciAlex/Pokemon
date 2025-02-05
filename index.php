<?php

require_once './Pokemon.php'

$Pokemon = new Pokemon();

$Pokemon->setnom('Pikachu')
    ->setPV(50)
    ->setAtk(90)
    ->setDef(50)
    ->setVit(90);


echo '<h1>'. $Pokemon1->getnom() .'</h1>';
echo '<p>'. $Pokemon1->getPV() .'</p>';
echo '<p>'. $Pokemon1->getAtk() .'</p>';
echo '<p>'. $Pokemon1->getDef() .'</p>';
echo '<p>'. $Pokemon1->getVit() .'</p>';
