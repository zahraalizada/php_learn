<?php include "db.php"; ?>

<form action="" method="get">
    <input type="text" name="kelime">
    <input type="submit" value="Ara">
</form>


<?php

if($_GET){
    $kelime = $_GET['kelime'];

     if(!$kelime){
         echo "Lutfen kelime giriniz..";
     } else{

         $query = $db->prepare("SELECT * FROM dersler WHERE baslik LIKE :baslik");
         $query ->execute([':baslik' => "%".$kelime."%"]);

         $query_row_count = $query->rowCount();
         if($query_row_count > 0){
             echo $query_row_count." sayida kelime bulundu";
             echo "<br><br>";

             foreach ($query as $row){
                 echo "<b>Sonuc: </b> " . $row['baslik'];
                 echo "<br>";
             }
         } else{
             echo "Hic kelime bulunamadi";
         }
     }
}


?>