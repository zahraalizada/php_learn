<?php

if($_GET){ // sil isleminde get methodu kullaniliyor

    $id = $_GET['id']; // get ile gelen id deyerini aliyoruz
    $db = new PDO("mysql:host=localhost;dbname=yapilacaklar_db",'root',''); //db-ye baglaniyoruz
    //yapilacaklar_tbl table-dan id= valuesina uygun silme icin sorgu gonderiyoruz
    $query = $db->prepare("DELETE FROM yapilacaklar_tbl WHERE id=?");
    $sonuc = $query->execute([$id]); // $id getden gelen id deyerini esitliyoruz table-daki id-ye
    header("Location: index.php");

}



?>