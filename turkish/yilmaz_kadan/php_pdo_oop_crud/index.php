<?php
require_once "classes/db.class.php";

$veritabaninesnesi = new db();


// ------ QUERY ILE YENI KAYIT EKLEME -------
//$kontrol = $veritabaninesnesi->query("SELECT * FROM veriler");



// ------ QUERY ILE YENI KAYIT EKLEME -------
$kontrol = $veritabaninesnesi->query("INSERT INTO veriler (veri_isim,veri_soyisim,veri_yas) values (?,?,?) ", ['Adnan','Yilmaz',35]);

if($kontrol){
    echo "basarili kayit islemi";
} else{
    echo "kayit edilemedi";
}

//=========================================================================================================================================================




?>