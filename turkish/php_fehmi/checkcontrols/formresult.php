<?php

require  "functions/safe.php";

$name = security($_POST['firstname']) ;
$surname = security($_POST['lastname']);
$languages = $_POST["languages"];


echo $name. " ".$surname;
echo "<br>";


$message = '<ul class="list-group list-group-flush"> ';
foreach ($languages as $lang){
   $message.= "<li class='list-group-item'> $lang </li>";
}
$message .= "</ul>";

echo $message;






?>