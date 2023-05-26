<?php

class Postlar extends Kontroller // kontroller classsindan extend ediliyor
{

    public function __construct(){

    }

    public function index(){
        $this->goruntu('misafir/index',[],'yonetici');
    }

    public function giris_yap($id = ''){

        echo "giris basarili";
        $phpkuladi = $_POST["phpkuladi"];
        $dinlesifre = $_POST["phpsifre"];

        echo "<br> Kullanici adiniz = ".$phpkuladi;
        echo "<br> Sifreniz = ".$dinlesifre;

//        $model = $this->model('Uyeler');
//        $model->tum_uyeler(); // uyeler modelindeki tum_uyeler fonksiyonunu tetikliyoruz
//        $uyeler = $model->veri["uyeler"]; // bu modeldeki veri['uyeler']- datalarini getir dedik
//        $this->goruntu('uyeler/listele',["ad"=>$uyeler],'giris');
    }
}

