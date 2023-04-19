<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Crud islemleri - PHP Insert, Update, Delete ve Select Islemleri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


</head>
<body>

<div class="container">
    <div class="row justify-content-center ">
        <div class="col-8">
            <?php

            // DUZENLEME SONRASINDA YAZILAN VALUE-U POST METHODUYLA DB TABLOYA GONDERECEYIZ
            if($_POST){
                $guncel_gorev = $_POST['guncel_gorev']; // duznele sayfamizdaki inputda yazdigimiz name-i kullaniyoruz
                $guncel_gorev_id = $_POST['hdnid']; // gizli input-un id-sini aliyoruz
                $db = new PDO("mysql:host=localhost;dbname=yapilacaklar_db",'root','');
                $query = $db->prepare("UPDATE yapilacaklar_tbl SET yapilacak_gorev = ? WHERE id = ?");
                $update = $query->execute([$guncel_gorev,$guncel_gorev_id]);//variable-lari ekliyoruz
                header("Location: index.php");

            }

            // DUZENLEME ISLEMINDE DUZENLEYE TIKLANDIGINDA AYNI ID-LI SATRIN DEYERINI ALMAK ICIN GET KULLANIYORUZ
            if($_GET){ // duzenleme isleminde get kullaniyoruz
                $id = $_GET['id']; // get-den gelen id degerini aliyoruz
                $db = new PDO("mysql:host=localhost;dbname=yapilacaklar_db",'root',''); // db-yi bagliyoruz
                // yapialcaklar tablosunda id-si getden gelen id-ye esit olan row-u fetc_assoc ediyoruz
                $query = $db->query("SELECT * FROM yapilacaklar_tbl WHERE id='{$id}'")->fetch(PDO::FETCH_ASSOC);
                isset($query["yapilacak_gorev"])?$gorev=$query["yapilacak_gorev"]:$gorev="Melumat tapilmadi";
            }
            ?>

            <h3 class="mb-3">Gorev Duzenle</h3>

            <form action="duzenle.php" method="POST">
                <!-- inputa yeni bilgi girdikten sonra id-i kullana bilmek icin gizli input olusturduk. Burada value degerine id esitleniyor. update zamani bu value id yerine kullaniliyor  -->
                <input type="hidden" name="hdnid" value="<?php echo $id; ?>">
                <input class="form-control" type="text" name="guncel_gorev" placeholder="Gorev giriniz" value="<?php echo $gorev; ?>"><br>
                <button type="submit" class="btn btn-primary">Duzenle</button>
            </form>


        </div>
    </div>

</div>













<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>


</body>
</html>


