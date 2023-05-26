<?php

class yonetici extends Kontroller // kontroller classsindan extend ediliyor
{

    public function __construct(){

        $durum = true;
        if($durum){
            $this->goruntu('yonetici/giris_yap',[],'yonetici');
            exit();
        }
    }

    public function index(){
        $this->goruntu('yonetici/index',[],'yonetici');
    }



}

