<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <style>


        ul{
            background-color: darkcyan;
            color: white;
            float: left;
            margin-right: 15px;
            width: 300px;
        }

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

<h2>Jquery egitim seti</h2>


<ul>
    <li>List 1 row 1</li>
    <li>List 1 row 2</li>
    <li>List 1 row 3</li>
    <li>List 1 row 4</li>
    <li>List 1 row 5</li>
</ul>
<ul>
    <li>List 2 row 1</li>
    <li>List 2 row 2</li>
</ul>
<ul>
    <li>List 3 row 1</li>
    <li>List 3 row 2</li>
    <li>List 3 row 3</li>
    <li>List 3 row 4</li>
</ul>
<div style="clear: left"></div>
<button id="run">Click</button> <br><br>







<script>
    $(function () {
        var maxValue = 0;
        $("#run").click(function () {
            $("ul").each(function () {
                maxValue = Math.max($(this).height(), maxValue);
            });
                $("ul").height(maxValue);
        });
    });



</script>




</body>
</html>
