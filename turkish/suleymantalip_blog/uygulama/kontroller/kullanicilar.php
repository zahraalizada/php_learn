<?php

class Kullanicilar extends Kontroller // kontroller classsindan extend ediliyor
{

    public function __construct(){

    }

    // cekirdek -> Kontroller classinda olan goruntu fonksiyonundan kullaniliyor
    public function isim($id = ''){

        // veri tabanindan uyeler tablosundaki veriyi cekmek icin model olusturup $model deyiskenine assign etdik
        $model = $this->model('Uyeler');
        $model->tum_uyeler(); // uyeler modelindeki tum_uyeler fonksiyonunu tetikliyoruz
        $uyeler = $model->veri["uyeler"]; // bu modeldeki veri['uyeler']- datalarini getir dedik

        $this->goruntu('uyeler/listele',["ad"=>$uyeler],'giris');
        // require_once 'uygulama/goruntuler/ '. $goruntule .' .php';
        // require_once 'uygulama/goruntuler/uyeler/listele.php'

        /*
        * goruntule fonksiyonunu kullanarak listele.php dosyasini bu sayfaya include etdik
        * Bu sayede o dosyaya gidip  Kontroller classinin goruntu metodunda yazdigimiz $veri arrayini kullana biliyoruz
        */

    }
}

