<?php
include_once 'db.php';

switch ($_GET['mode']){
    case 'insert':
        if (isset($_POST)) {
            $returnArray = [];
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $message = $_POST['message'];

            if ($name != "" and $surname != "" and $message != "")
            {
                $date = date('Y-m-d');
                $sorgu = $db->prepare("INSERT INTO test(name,surname,message,date) values(?,?,?,?)");
                $ekle = $sorgu->execute(array($name,$surname,$message,$date));
                if($ekle){
                    $returnArray['message'] = "Veri Eklendi";
                } else{
                    $returnArray['message'] = "Mesajinizi Kayd Edemedim";
                }

            } else{
                $returnArray['message'] =  "Lutfen tum alanlari doldurunuz";
            }

            echo json_encode($returnArray);
        }
        break;

    case 'get':
        $returnGetArray = [];
        $veri = $db->query("SELECT * FROM test ORDER BY id ASC ")->fetchAll(PDO::FETCH_ASSOC);
        foreach ($veri as $key => $value){
            $returnGetArray[$key]['name'] = $value['name'];
            $returnGetArray[$key]['surname'] = $value['surname'];
            $returnGetArray[$key]['date'] = $value['date'];
            $returnGetArray[$key]['message'] = $value['message'];
//            $returnGetArray['getMessage'] = '<div class="list">' . $value['name'] . ' ' . $value['surname'] . ' (' . $value['date'] . ') <br/> - ' . $value['message'] . '</div>';

//            echo '<div class="list">' . $value['name'] . ' ' . $value['surname'] . ' (' . $value['date'] . ') <br/> - ' . $value['message'] . '</div>';
        }

        $returnGetArray['data'] = $returnGetArray;
        echo json_encode($returnGetArray);
        break;
}




?>