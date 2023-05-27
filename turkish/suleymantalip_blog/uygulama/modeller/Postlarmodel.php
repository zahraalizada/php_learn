<?php

class Postlarmodel
{
    protected  $db=[];
    public $veri = [];

    public function __construct(){
        $this->db = new Db();
    }

//    public function tum_postlar(){
//        $veri_al = $this->db->query("SELECT * FROM postlar");
//        $this->veri['postlar'] = $veri_al;
//    }

    public function  giris_kontrol_et($kuladi,$sifre){
        $veri_al = $this->db->query("SELECT * FROM kontrol where kul_adi = :deger1 ", ["deger1" => $kuladi]);
        if(empty($veri_al)){
            $geri_donut = "kul_yok";
        } else{
            $al_sifre = $veri_al[0]["sifre"];
            if($sifre == $al_sifre){
                $geri_donut = "giris";
                $this->veri["oturum"] = ["yetki"=>$veri_al[0]["yetki"],"kontrol_id"=>$veri_al[0]["id"]];
            } else {
                $geri_donut = "sifre";
            }
        }
        $this->veri["giris"] = $geri_donut;

    }



}