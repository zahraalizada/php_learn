<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ogrenci Kayit Uygulamasi || Herkese yazilim</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
</head>
<body>

<h1 class="text-center">Ogrenci Kayit Uygulamasi</h1>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="border: 1px solid black; padding:20px;" >
            <form method="post">
                <div class="form-group">
                    <label>Isim: </label>
                    <input type="text" name="isim" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Soyisim: </label>
                    <input type="text" name="soyisim" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>No: </label>
                    <input type="text" name="no" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Sinif: </label>
                    <select class="form-control" name="sinif">
                        <option value="" disabled selected>Lutfen sinif secin</option>
                        <option value="9">9. Sinif</option>
                        <option value="10">10. Sinif</option>
                        <option value="11">11. Sinif</option>
                        <option value="12">12. Sinif</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Kaydet" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
    <hr>

    <h4 class="text-center text-danger"><b>Guncel sinif listesi</b></h4>
    <div class="row">
        <div class="col-mdm-10 color-md-offset-1">
            <table class="table table-bordered table striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Isim</th>
                        <th width="75%">Soyisim</th>
                        <th width="100%">No</th>
                        <th width="100%">Sinif</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ahmet</td>
                        <td>Atasoglu</td>
                        <td>444</td>
                        <td>1</td>
                        <td class="text-center"><button type="button" class="btn btn-danger">Sil</button></td>
                    </tr>
                </tbody>

            </table>
        </div>

    </div>

</div>





<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="app.js"></script>
</body>
</html>


<?php

?>






