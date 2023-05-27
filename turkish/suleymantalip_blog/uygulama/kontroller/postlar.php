<?php

class Postlar extends Kontroller // kontroller classsindan extend ediliyor
{

    public function __construct(){

    }

    public function index(){
        $this->goruntu('misafir/index',[],'yonetici');
    }

    public function giris_yap($id = ''){

        $veri = $_POST["form_veri"];
        $veri = myFunc::post_coz($veri);
        $kul_adi =$veri["kuladi"];
        $sifre =$veri["sifre"];

        $model = $this->model('Postlarmodel');
        $model->giris_kontrol_et($kul_adi,$sifre);
        $geri_donut = $model->veri["giris"];

        if($geri_donut == "kul_yok"){
            $json["islem"] = "kul_yok";
        } else if($geri_donut == "sifre"){
            $json["islem"] = "sifre";
        }else if($geri_donut == "giris"){
            $json["islem"] = "giris";
            $_SESSION['oturum'] = $model->veri["oturum"];
        }
        echo json_encode($json);


    }
}

