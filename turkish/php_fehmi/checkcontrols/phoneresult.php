<!DOCTYPE html>
<html>
<head>
    <title>PHP Lesson | Fehmi Uyar</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>

<div class="container-fluid">

    <div class="card mt-3">
        <div class="card-body">
            <?php

//            $text = $_POST['myText'];
//                if(empty($text)){
//                    echo '<div class="alert alert-warning" role="alert">Herhangi bir cumle girmediniz!</div>';
//                } else{
//                    $pattern = "/[^aıoueəiöü]/ui";
//                    preg_match_all($pattern, $text, $result);
//                    echo "<p>";
//                    foreach ($result[0] as $myKey => $myValue){
//                        echo $myValue;
//                    }
//                    echo "</p>";
//
//                }
            ?>

            <?php
                $text = $_POST['myText'];
                if(empty($text)){
                    echo "Bos birakilamaz";
                } else{
                     $patterNumber = "/[^0-9 ]/"; // rakam ve bosluk olmayan karakterler
                     if(preg_match($patterNumber, $text)== 1){
                         echo "Lutfen sadece rakamsal degerler giriniz";
                     } else{
                         $length = preg_replace("/\s+/","",$text); // butun bosluklari bul sil
                         $length = trim($length);
                        if(!(strlen($length) > 9 && strlen($length) < 12 )){
                            echo "Telefon numarasi 10 ve ya 11 haneli olmali!";
                        }else{
                            $pattern = "/ ?0?\s?5[0-9]{2}\s?[0-9]{3}\s?[0-9]{2}\s?[0-9]{2}\s?/";
                            $result = preg_match($pattern, $text, $takeNumber);
                            if($result){
                                echo $takeNumber[0];
                            } else{
                                echo "Girilen metinde telefon numarasi mevcut degil";
                            }

                        }
                     }

                }

                echo "<br>";




            ?>




        </div>

    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>




<?php



//$text = "Hello. My name is php. I am a simple language. you can learn php me fast. Good language php";
//$pattern ="/php/";
//$result = preg_split($pattern, $text);


//$content = "Merhaba, benim adım php. Ben basit bir dilim. Beni hızlıca öğrene bilirsiniz. Php'yi seviyorum. Php hakkında ne düşünüyorsunuz acaba! Hem reactJs hem de nodeJS biliyorum. VueJS'yi de biliyorum";
//
//$pattern ="/[^fehmi]/ui";
//
//preg_match_all($pattern, $content, $result);
//
//
//echo "<pre>";
//print_r($result);
//echo "</pre>";



//if(!empty($result)){
//    echo "$result";
//} else{
//    echo "Aranilan sartlar icerikte bulunamadi";
//}


//$content = [7,77,71.19,19.27,57];
//$pattern = ["/7/","/\./"];
//$replace = ['9','-'];
//$result = preg_replace($pattern, $replace, $content);
//
//
//echo "<pre>";
//print_r($result);
//echo "</pre>";



?>