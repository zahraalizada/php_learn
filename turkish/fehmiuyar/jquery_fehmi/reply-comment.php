<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <style>
        a {
            color: dimgrey;
            font-size: 12px;
        }
        textarea{
            border: none;
            border-bottom: 2px solid #403E3E;
            width: 450px;
            margin-bottom: 10px;
            resize: none;
            outline: none;
        }
        button{
            border:none;
            padding: 10px;
            width: 115px;
            background-color: darkolivegreen;
        }
        button:hover{
            background-color: darkkhaki;
        }
    </style>
</head>
<body>

<h2>Jquery egitim seti</h2>

<?php
for ($i = 1; $i <= 5; $i++) {
    echo 'Bu bir yorumdur. Alttaki linkten cevap yazabilirsiniz <br>
    <a onClick="show(' .$i. ');">YANITLA</a><br>
    <div class="hide" id="answer'.$i.'">
        <textarea id="comment" name="comment"></textarea><br>
        <button type="button" id="cancel" onClick="hide(' .$i. ');">IPTAL</button>
        <button type="button" id="answer">YANITLA</button>
    </div>
   
    <br><br>';
}
?>


<script>
    $(function () {
        $('.hide').hide();
    });
    function hide(ID){
        $("#answer"+ID).hide();
    }
    function show(ID){
        $("#answer"+ID).show();
    }


</script>


</body>
</html>
