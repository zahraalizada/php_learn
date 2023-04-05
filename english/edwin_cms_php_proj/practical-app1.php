<?php

//connection yaratma
$connection = mysqli_connect('localhost', 'root', '','practical-db');

if(!$connection){ // connection olmadigini yoxlayir yoxdursa die blocku isleyecek
    die("Database Connection Failed") . mysqli_error($connection);
}

// sorgu gonderme db-de table secmek ucun
$query = "SELECT * FROM reports";
// db ile sql query birlesmesi
$result = mysqli_query($connection,$query);

if(!$result){ // db-den table geldiyinin yoxlanilmasi
    die("QUERY FAILED");
}

while($records = mysqli_fetch_assoc($result)){ // gelibse fetchassoc ile arraye datalarin cevrilmesi
    echo $records['days_of_the_week']."<br>";
}

?>

