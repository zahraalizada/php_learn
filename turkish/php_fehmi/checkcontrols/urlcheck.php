<!DOCTYPE html>
<html>
<head>
    <title>PHP Lesson | Fehmi Uyar</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>

<div class="container-fluid">

    <div class="card mt-3">
        <div class="card-body">
            <form action="urlresult.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Bir URL girin</label>
                    <input type="text" class="form-control" name="myText">
                    <small class="form-text text-muted">URL Formati: (http(s)://www.fehmiuyar.net)</small>

                </div>

                <button type="submit" class="btn btn-success mt-4">Search</button>
            </form>
        </div>

    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>