<?php

class myFunc {

    public function __construct() {

    }

    public static function haftanin_kacinci_gunu() {
        $hafta = date('w');
        $hafta == 0 ? $hafta = 7 : null;
        return $hafta;
    }

    public static function isim_getir(){
        return "Furkan";
    }
    public static function post_coz($deger){
        parse_str($deger,$output);
        return $output;
    }
    public static function kontrol(){
        if (isset($_SESSION["oturum"])){
            return false ;
        } else {
            return true;
        }

    }

    public function cikis(){
        session_destroy();
        header("Location: ".ANA_DIZIN );
        return;
    }

}
