<?php

setlocale(LC_ALL,'tr_TR,UTF-8');
session_start();
$isim = "http://localhost/suleymantalip_blog/";
//$isim = "http://192.168.1.5";
//
define("ANA_DIZIN","$isim");
define("EV","$isim"."ev/");
define("KAYNAK","$isim"."uygulama/kaynak/");
define("RESIM","$isim"."uygulama/dosyalar/");
define("DOSYALAR",$_SERVER['DOCUMENT_ROOT']."/suleymantalip_blog/");
define("JSDEGIS",time());

require_once 'uygulama/init.php';
$uygulama = new Uygulamalar;




