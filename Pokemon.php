<?php

abstract class Pokemon {
    public function __construct(
        private string $nom,
        private string $type1,
        private ?string $type2,
        private int $PV,
        private int $AtK,
        private int $Def,
        private int $SpA,
        private int $SpD,
        private int $Vit,
      )
}

public function setNom (string $value):self
{
    $this->nom=$value;
    return $this;
}

public function setType1 (string $value):self
{
    $this->Type1=$value;
    return $this;
}

public function setType2 (string $value):self
{
    $this->Type2=$value;
    return $this;
}

public function setPV (int $value):self
{
    $this->PV=$value;
    return $this;
}

public function setAtk (int $value):self
{
    $this->Atk=$value;
    return $this;
}

public function setDef (int $value):self
{
    $this->Def=$value;
    return $this;
}

public function setSpeA (int $value):self
{
    $this->SpeA=$value;
    return $this;
}

public function setSpeD (int $value):self
{
    $this->SpeD=$value;
    return $this;
}

public function setVit (int $value):self
{
    $this->Vit=$value;
    return $this;
}

public function getNom():string
{
    return $this->nom;
}

public function getType1():string
{
    return $this->nom;
}

public function getType2():string
{
    return $this->nom;
}

public function getPv():string
{
    return $this->nom;
}

public function getAtk():string
{
    return $this->nom;
}

public function getDef():string
{
    return $this->nom;
}

public function getSpeA():string
{
    return $this->nom;
}

public function getSpeD():string
{
    return $this->nom;
}

public function getVit():string
{
    return $this->nom;
}
