<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        table td, table th{
            border: 1px solid #ddd;
            padding: 8px;
        }
        table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
        table tr:nth-child(even){background-color: #f2f2f2;}

        table tr:hover {background-color: #ddd;}

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
<input id="search" type="text" placeholder="Search...">
<br><br>

<ul id="myList">
    <li>Angular Js</li>
    <li>React Js</li>
    <li>Vue Js</li>
    <li>Node Js</li>
</ul>

<!--<table>-->
<!--    <thead>-->
<!--        <tr>-->
<!--            <th>Firstname</th>-->
<!--            <th>Lastname</th>-->
<!--            <th>Email</th>-->
<!--        </tr>-->
<!--    </thead>-->
<!--    <tbody id="myTable">-->
<!--        <tr>-->
<!--            <td>Ayfer</td>-->
<!--            <td>UYAR</td>-->
<!--            <td>ayfer@example.com</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Fehmi</td>-->
<!--            <td>UYAR</td>-->
<!--            <td>fehmiuyar.net@gmail.com</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Emrullah</td>-->
<!--            <td>Bilir</td>-->
<!--            <td>emrullah@greatstuff.com</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Murat</td>-->
<!--            <td>Kosar</td>-->
<!--            <td>murat@test.com</td>-->
<!--        </tr>-->
<!--    </tbody>-->
<!--</table>-->





<script>
    $(function () {
        $("#search").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#myList li").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            })
        })

    })
</script>

<!--<script>-->
<!--    $(function () {-->
<!--        $("#search").on("keyup", function () {-->
<!--            var value = $(this).val().toLowerCase();-->
<!--            $("#myTable tr").filter(function () {-->
<!--                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)-->
<!--            })-->
<!--        })-->
<!--    })-->
<!--</script>-->


</body>
</html>
