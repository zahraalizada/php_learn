<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <style>

        button{
            border:none;
            padding: 10px;
            width: 115px;
            background-color: darkolivegreen;
            color: #fff;
            font-weight: bold;
        }
        button:hover{
            background-color: darkkhaki;
        }
        #result{
            margin: 20px;
        }
    </style>
</head>
<body>

    <h2>Jquery egitim seti</h2>


    <form>
        <input type="text" value="jquery egitim seti"> <br><br>
        <textarea>https://www.udemy.com/user/karaprens-2</textarea> <br><br>
        <input type="checkbox" name="confirm" value="1" checked> Onayla <br><br>

        <select>
            <option>Javascript</option>
            <option selected>Jquery</option>
            <option>Angular JS</option>
        </select> <br> <br>
        <select multiple>
            <option selected>Node Js</option>
            <option>React Js</option>
            <option>Vue Js</option>
        </select> <br><br>
        <input type="radio" name="gender" value="1" checked> Bayan
        <input type="radio" name="gender" value="0"> Bay <br><br>


    </form>

    <button id="btn">Show</button>

    <p id="result">Bu paragraf icindeki <b>bold</b> bir metin</p>

    <script>
        $(function () {
           var getValue="";
           $('#btn').click(function () {
               getValue += "Metin Kutusu: " + $("input:text").val()+"<br>";
               getValue += "Metin Alani: " + $("textarea").val()+"<br>";
               getValue += "Onay Kutusu: " + $("input:checkbox:checked").val()+"<br>";
               getValue += "Secim: " + $("select").val()+"<br>";
               getValue += "Coklu Secim: " + $("select[multiple]").val()+"<br>";
               getValue += "Radio duymesi: " + $("input:radio:checked").val()+"<br>";

               $('#result').html(getValue);
           })

        })


</script>


</body>
</html>
