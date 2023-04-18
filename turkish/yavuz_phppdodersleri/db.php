<?php


// PDO db baglantisi
try {
    $db = new PDO("mysql:host=localhost;dbname=yavuz_phppdodersleri;charset=utf8;","root","");
} catch (PDOException $error){
    print_r($error->getMessage());
}

?>