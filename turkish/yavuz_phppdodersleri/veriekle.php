<?php
require_once "db.php";


// PDO ile veri ekleme islemi
if($_POST){
    $baslik = $_POST['baslik']; // input value alinir

    if(!$baslik){
        echo "Bos birakmayiniz";
    } else{
        $kaydet = $db->prepare("INSERT INTO dersler SET baslik =:b"); // db table-ye insert edilir
        $kaydet->execute([':b' => $baslik]); // kod calistirilir

        if($kaydet){ // kontrol
            echo "Baslik basariyla kayit edildi";
        } else{
            echo "Bir hata olustu";
        }
    }
}

?>


<form action="" method="post">
    <input type="text" name="baslik" placeholder="Baslik giriniz" /><br><br>
    <input type="submit" value="Gonder" /><br>
</form>