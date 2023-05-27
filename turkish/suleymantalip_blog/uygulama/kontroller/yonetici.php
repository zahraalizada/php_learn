<?php

class yonetici extends Kontroller // kontroller classsindan extend ediliyor
{

    public function __construct()
    {

        //eger oturum acilmissa $durum false olsun
        //eger oturum acilmamissa $durum true olsun
        $durum = myFunc::kontrol();
        if ($durum) {
            $this->goruntu('yonetici/giris_yap', [], 'yonetici');
            exit();
        }
    }

    public function index()
    {
        $this->goruntu('yonetici/index', [], 'yoneticimenu');
    }


    public function yazilarim($parametre = "")
    {
        switch ($parametre) {
            case "yeni":
                $this->goruntu('yonetici/yazi_islem/yeni', [], 'yoneticimenu');
                break;

            case !"":
                $this->goruntu('yonetici/yazi_islem/guncelle', [], 'yoneticimenu');
                break;

            default:
                $this->goruntu('yonetici/yazi_islem/tumu', [], 'yoneticimenu');
                break;
        }




    }


    public function cikis()
    {
        myFunc::cikis();
    }


}

