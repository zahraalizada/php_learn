<?php

    require_once "db.php";

    $sorgu = $db->prepare("SELECT * FROM dersler ");
    $sorgu->execute();

    $row = $sorgu->rowCount();

    if($row>0){
        while ($items = $sorgu->fetch(PDO::FETCH_OBJ)){

            echo $items->id. " - " . $items->baslik .
                " | <a href='verisil.php?id=$items->id'>Sil</a>" .
                " | <a href='veriguncelle.php?id=$items->id'>Guncelle</a> <br>" ;
        }

    } else{
        echo "Dersler tablosunda hic veri yok ";
    }



?>
