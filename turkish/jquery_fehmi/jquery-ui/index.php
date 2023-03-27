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
            width: 150px;
            height: 150px;
            background-color: #fff; 
            border: 1px solid black;
            float: left;
        }
        .drop{
            border: 1px solid black;
            background-color: darkred;
            color: white;
            width: 350px;
            height: 200px;
            float: left;
            padding: 10px;
            text-align: center;
            margin-left: 100px;
        }
        .test{
            background-color: green;
        }
    </style>


</head>
<body>

<h2>Welcome to my JQuery lesson</h2>
<div id="box" class="box">
    <div class="subBox" id="subBox">
         Ben suruklene bilirim
    </div>
    <div class="drop" id="drop">
        <p>Buraya Birak!</p>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="jquery-ui.min.js"></script>

<script>
    $(function () {
        $( "#subBox" ).draggable({
            containment: "#box"
        });
        $("#drop").droppable({
            drop:function (event, ui) {
                $(this).addClass("test").find("p").html("Brikatim!");
            }
        })
    });



</script>




</body>
</html>
