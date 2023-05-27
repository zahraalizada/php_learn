<?php

class Kontroller // kontrol folderinde olan dosylarin baglandigi yer
{
    public function model($model)
    {
        require_once 'uygulama/modeller/'.$model.'.php';
        return new $model();
    }


    /*
     * $sayfa  deyiskeni sayesinde if controlunde sayfanin nasil gorunmesini seciyoruz
     * 'ana' sayfaysa ustmenu alt menu ve content gorunecek
     * giris sayfa ise ust alt  ve giris sayfa gorunecek
     * tek yazilibsa sadece content gorunecek
    */

    public function goruntu ( $goruntu, $veri = [], $sayfa = "ana")
    {
        if ($sayfa == 'ana') {
            require_once 'uygulama/goruntuler/sabitler/ust.php';
            require_once 'uygulama/goruntuler/sabitler/ustmenu.php';
            require_once 'uygulama/goruntuler/'. $goruntu.".php";
            require_once 'uygulama/goruntuler/sabitler/alt.php';
        }
        elseif ($sayfa == "giris") {
            require_once 'uygulama/goruntuler/sabitler/ust.php';
            require_once 'uygulama/goruntuler/'. $goruntu.".php";
            require_once 'uygulama/goruntuler/sabitler/alt.php';
        }
        elseif ($sayfa == "yonetici") {
            require_once 'uygulama/goruntuler/sabitler/yonetici_ust.php';
            require_once 'uygulama/goruntuler/'. $goruntu.".php";
            require_once 'uygulama/goruntuler/sabitler/yonetici_alt.php';
        }
        elseif ($sayfa == "yoneticimenu") {
            require_once 'uygulama/goruntuler/sabitler/yonetici_ust.php';
            require_once 'uygulama/goruntuler/sabitler/menu_ust.php';
            require_once 'uygulama/goruntuler/'. $goruntu.".php";
            require_once 'uygulama/goruntuler/sabitler/menu_alt.php';
            require_once 'uygulama/goruntuler/sabitler/yonetici_alt.php';
        }
        elseif ($sayfa == "tek") {
            require_once 'uygulama/goruntuler/'. $goruntu.".php";
        }
    }
}