<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="colorbox.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <style>
        button {
            border: none;
            padding: 10px;
            width: 115px;
            background-color: darkolivegreen;
            color: #fff;
            font-weight: bold;
        }
        button:hover {
            background-color: darkkhaki;
        }

    </style>
</head>
<body>

<h2>Jquery öğreniyorum</h2>
<h2>Jquery oldukça eğlenceli</h2>

<p><a class="group1" href="images/owl.jpg" title="Me and my grandfather on the Ohoopee.">Owl 1</a></p>
<p><a class="group1" href="images/lisa.jpg" title="Me and my grandfather on the Ohoopee.">Lisa 2</a></p>
<p><a class="group1" href="images/orel.jpg" title="Me and my grandfather on the Ohoopee.">Orel 3</a></p>


<button id="run">Click</button> <br><br>





<script src="jquery.colorbox-min.js"></script>




<script>
    $(function () {
        $(".group1").colorbox({
            rel:"group1",
            slideshow: true,
            width: "75%",
            height:"75%"

        });
    });



</script>




</body>
</html>
