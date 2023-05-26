<?php

class Misafir extends Kontroller // kontroller classsindan extend ediliyor
{

    public function __construct(){

    }

    public function index(){

        $this->goruntu('misafir/index',[],'yonetici');
    }

    public function isim($id = ''){
        $model = $this->model('Uyeler');
        $model->tum_uyeler(); // uyeler modelindeki tum_uyeler fonksiyonunu tetikliyoruz
        $uyeler = $model->veri["uyeler"]; // bu modeldeki veri['uyeler']- datalarini getir dedik
        $this->goruntu('uyeler/listele',["ad"=>$uyeler],'giris');
    }
}

