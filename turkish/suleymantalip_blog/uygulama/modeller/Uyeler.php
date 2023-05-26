<?php

class Uyeler
{
    protected  $db=[];
    public $veri = [];

    public function __construct(){
        $this->db = new Db();
    }

    public function tum_uyeler(){
        $veri_al = $this->db->query("SELECT * FROM uyeler");
        $this->veri['uyeler'] = $veri_al;
    }


}