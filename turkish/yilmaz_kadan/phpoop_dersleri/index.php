<?php

class Araba{
    private $renk = "";
    private $marka = "";
    private $yakittipi = "";

    public function __construct($renk,$marka,$yakittipi){
        $this->renk = $renk;
        $this->marka = $marka;
        $this->yakittipi = $yakittipi;
    }

    public function bilgileriDegistir($renk,$marka,$yakittipi){
        $this->renk = $renk;
        $this->marka = $marka;
        $this->yakittipi = $yakittipi;
    }

    public function  arababilgileriniyazdir(){
        echo "Araba marka: ".$this->marka;
        echo "<br>";
        echo "Araba renk: ".$this->renk;
        echo "<br>";
        echo "Araba yakit tipi: ".$this->yakittipi;
    }




}

$araba1 = new Araba("Turuncu","Renault","Benzin");
$araba1->bilgileriDegistir("Beyaz", "Nissan", "Dizel");
$araba1->arababilgileriniyazdir();







?>