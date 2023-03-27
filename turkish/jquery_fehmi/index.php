<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warning{
            width: 500px;
            padding: 15px;
            background-color: gold;
        }
        .error{
            width: 500px;
            padding: 15px;
            background-color: red;
        }
        .success{
            width: 500px;
            padding: 15px;
            background-color: green;
        }
    </style>

</head>
<body>

<h2>Welcome to my JQuery lesson</h2>
<p id="message"></p>
<form action="#" method="post" id="frmLogin">
    <p>
        <label>Username:</label>
        <input type="text" name="username" id="username">
    </p>
    <p>
        <label>Password:</label>
        <input type="password" id="pass" name="pass">
    </p>
    <button type="button">Login</button>
</form>



<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(function () {
        $("button").click(function () {
            var username, pass;
            username = $("#frmLogin #username").val();
            pass = $("#frmLogin #pass").val();
            if(username == ""){
                $("#username").css("border","2px solid gold").css("box-shadow","0 0 3px gold");
                $("#message").html("Kullanici adi bos birakilamaz").addClass("warning");
            }else if(pass == ""){
                $("#pass").css("border","2px solid gold").css("box-shadow","0 0 3px gold");
                $("#message").html("Sifre bos birakilamaz").addClass("warning");
            }  else if(username != "Fehmi"){
                $("#username").css("border","2px solid red").css("box-shadow","0 0 3px red");
                $("#message").html("Kullanici adi yanlis").removeClass("warning").addClass("error");
            } else{
                $("#message").html("Giris yapildi").removeClass("warning").removeClass("error").addClass("success");
            }


        })

    });



</script>




</body>
</html>
