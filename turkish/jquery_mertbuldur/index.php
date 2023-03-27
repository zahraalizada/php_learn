


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First application</title>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <style>
        .list{
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .list label{
            display: block;
            margin-bottom: 5px;
        }
        .list input{
            padding: 5px;
            width: 100%;
        }
        .alert{
            display: none;
            padding: 5px;
            color: red;
        }
        .results{
            display: none;
            padding: 5px;
            color: green;
        }
    </style>
</head>
<body>

<div class="alert"></div>

<div class="list">
    <label>Adiniz</label>
    <input type="text" name="name" id="name">
</div>
<div class="list">
    <label>Soyadiniz</label>
    <input type="text" name="surname" id="surname">
</div>
<div class="list">
    <label>Mesajiniz</label>
    <input type="text" name="message" id="message">
</div>
<div class="list">
    <button type="button" id="veriGonder">Veri Gonder</button>
</div>

<table id="example" class="display" style="width:100%">
    <thead>
    <tr>
        <th>Name</th>
        <th>Surname</th>
        <th>Date</th>
        <th>Message</th>
    </tr>
    </thead>

</table>


<script src="https://code.jquery.com/jquery-3.6.4.js"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>


<script>
    $(function (){
        $("#veriGonder").click(function () {
            var name = $("input[name=name]").val();
            var surname = $("input[name=surname]").val();
            var message = $("input[name=message]").val();
            $.ajax(
                {
                    url: "api.php?mode=insert",
                    type: "POST",
                    dataType: 'json',
                    data:{
                        'name':name,
                        'surname':surname,
                        'message': message
                    },
                    success: function (result){
                        $("input[name=name]").val("");
                        $("input[name=surname]").val("");
                        $("input[name=message]").val("");

                        $(".alert").show();
                        $(".alert").html(result.message);
                    }
                }
            )
        });

        $('#example').DataTable({
            ajax: 'api.php?mode=get',
            columns: [
                { data: 'name' },
                { data: 'surname' },
                { data: 'date' },
                { data: 'message' }
            ],
        });

        // function veriCek(){
        //     $.ajax({
        //         url:"api.php?mode=get",
        //         type: 'POST',
        //         dataType: 'json',
        //         success: function (result) {
        //             $(".results").show();
        //             var html = "";
        //             $.each(result,function (a,b) {
        //                 html += '<div class="list"> ' + b.name + ' ' + b.surname + ' (' + b.date + ') ' + '<br/>' + b.message + '</div>';
        //             });
        //             $(".results").html(html);
        //
        //         }
        //     })
        // }




        // setInterval(veriCek, 1000);




    })

</script>
</body>
</html>



