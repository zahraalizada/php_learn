<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=udemy;charset=utf8", "root", "");

} catch (Exception $e){
    print $e -> getMessage();
}

?>