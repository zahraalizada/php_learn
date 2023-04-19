<form action="" method="GET">
    <input type="text" name="kelime" />
    <br><br>
    <input type="submit" value="Arama yap" />


</form>
<br><hr><br>

<?php

    if($_GET){
        $kelime = $_GET['kelime'];

        if(!$kelime){
            echo "Arama yapmak icin birseyler yaziniz";
        } else{
            echo $kelime;
        }
    }




?>