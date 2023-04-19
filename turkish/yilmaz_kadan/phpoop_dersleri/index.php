<?php

class Araba{
    public $renk = "";
    public $marka = "";
    public $yakittipi = "";

    public function __construct($renk,$marka,$yakittipi){
        $this->renk = $renk;
        $this->marka = $marka;
        $this->yakittipi = $yakittipi;
    }



}

$araba1 = new Araba("Turuncu","Renault","Benzin");
var_dump($araba1);







?>