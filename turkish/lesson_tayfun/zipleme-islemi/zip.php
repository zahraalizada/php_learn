<?php

//$myZip = new ZipArchive();
//$myZip->open('mydoc.zip', ZipArchive::CREATE);
//$myZip->addFile('index.html');
//$myZip->addFile('style.css', 'main.css');
//$myZip->close();


foreach (glob('*') as $file){
    if ($file != basename(__FILE__))
    echo $file . "<br>";
}
?>