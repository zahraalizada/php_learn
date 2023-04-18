<?php
include "db.php";

if ($_GET) {
    $id = $_GET['id'];



    if (!$id) {
        header('Location: listele.php');
    } else {
        $sil = $db->prepare("DELETE FROM dersler WHERE id=:id");
        $sil->execute([':id' => $id]);

        if ($sil) {
            echo "Baslik silindi";
            header('Refresh:3;url=listele.php');
        } else {
            echo "Baslik silinirken bir sorun olustu";
        }
    }
}

?>