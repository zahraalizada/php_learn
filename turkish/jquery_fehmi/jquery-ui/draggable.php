<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="jquery-ui.min.css">
    <style>
        .box{
            width: 800px;
            height: 500px;
            background-color: darkkhaki;
            padding: 10px;
            margin: 20px;
            border: 1px solid black;
        }
        .subBox{
            width: 450px;
            height: 90px;
            background-color: #fff; 
            border: 1px solid black;
        }
        .title{
            padding: 10px;
            background-color: darkred;
            color: #fff;
        }
        .content{
            padding: 10px;

        }
    </style>


</head>
<body>

<h2>Welcome to my JQuery lesson</h2>
<div id="box" class="box">
    <div class="subBox" id="subBox">
        <div class="title"> Bu bir mesaj basligi</div>
        <div class="content">Lorem ipsum dolor sit amet </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="jquery-ui.min.js"></script>

<script>
    $(function () {
        $( "#subBox" ).draggable({
            containment:"parent",
            handle: ".title"
        });
    });



</script>




</body>
</html>
