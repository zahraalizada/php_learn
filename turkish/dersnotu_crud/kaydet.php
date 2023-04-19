<?php
if ($_POST) { // kaydet-de post metodu kullaniliyor
    $gorev = $_POST["gorev"]; // post-dan name ile gelen verileri aliyoruz
    $db = new PDO("mysql:host=localhost; dbname=yapilacaklar_db", 'root', ''); // db-ye baglaniyoruz

  $query = $db->prepare("INSERT INTO yapilacaklar_tbl (yapilacak_gorev) VALUES (?)"); // db-deki table basliqlarina uygun valuelar olacqini qeyd edirik
//    $query = $db->prepare("INSERT INTO yapilacaklar_tbl SET yapilacak_gorev = ?"); // db-deki table basliqlarina uygun valuelar olacqini qeyd edirik ----- bu 2-ci versiyadi
    $ekle = $query->execute([$gorev]); // postdan input name ile aldigimiz deyerleri values hisse ucun add edirik, db-e dusur
    header("Location: index.php"); // add bitdikden sonra yeniden form olan sehifeye qayitmasini isteyirik


} else {
    echo "none";
}


?>