<?php  require_once "db.php"; ?>

<form action="" method="get">
    <input type="text"  name="kelime">
    <input type="submit" value="Arama Yap" >
</form>

<br><hr><br>

<?php

if($_GET){
    $kelime = $_GET['kelime'];

    if(!$kelime){
        echo "Arama icin bir sey yaziniz..";
    } else{
        $query = $db->prepare("SELECT * FROM dersler WHERE baslik LIKE :baslik");
        $query->execute([':baslik'=>'%'.$kelime.'%']);

        $query_row_count = $query->rowCount();
        if($query_row_count>0){
            echo $kelime." - Kelimesine uygun ". $query_row_count."tane sonuc bulundu <br>";

            foreach ($query as $row){

                echo "<br><b>Sonuc: </b> ". $row['baslik'];
            }
        } else{

        }




    }
}


?>