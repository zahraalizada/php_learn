<?php

require_once 'db.php';

if ($_GET['id']) {
    $id = $_GET['id'];

    if (!$id) {
        echo "Gelen id bos";
    } else {
        $sorgu = $db->prepare("SELECT * FROM dersler WHERE id=:id");
        $sorgu->execute(['id' => $id]);

        if ($sorgu->rowCount()) {
            $row = $sorgu->fetch(PDO::FETCH_ASSOC );

            if($_POST){
                $baslik = $_POST['baslik'];
                if(!$baslik){
                    echo "Bos birakma";
                } else{
                    $guncelle = $db->prepare("UPDATE dersler SET baslik=:baslik WHERE id=:id");
                    $guncelle->execute([':baslik'=> $baslik, ':id' => $id]);

                    if($guncelle){
                        echo "Veri guncellendi";
                        header("Refresh:3;url=listele.php");
                    } else{
                        echo "Veri guncellenirken bir hata olustu";
                    }
                }
            }

?>

            <form action="" method="post">
                <input type="text" name="baslik" value="<?php echo $row['baslik']; ?>" /><br>
                <button type="submit">Guncelle</button>

            </form>


<?php
        } else {
            echo "Bu id-e ait bir veri bulunmuyor";
        }
    }
}

?>