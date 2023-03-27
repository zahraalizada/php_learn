<!DOCTYPE html>
<html>
<head>
    <title>PHP Lesson | Fehmi Uyar</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>

    <div class="container-fluid">

        <div class="card mt-3">
            <div class="card-body">
               <form action="formresult.php" method="post">
                   <div class="form-group">
                       <label>Adiniz:</label>
                       <input type="text" class="form-control" id="myName" name="firstname" />
                   </div>
                   <div class="form-group">
                       <label>Soyadiniz:</label>
                       <input type="text" class="form-control" id="myName" name="lastname" />
                   </div>

                   <div class="form-check">
                       <input class="form-check-input" type="checkbox" value="Php" name="languages[]">
                       <label class="form-check-label">
                           Php
                       </label>
                   </div>
                   <div class="form-check">
                       <input class="form-check-input" type="checkbox" value="React" name="languages[]">
                       <label class="form-check-label">
                           React JS
                       </label>
                   </div>
                   <div class="form-check">
                       <input class="form-check-input" type="checkbox" value="Angular" name="languages[]">
                       <label class="form-check-label">
                           Angular JS
                       </label>
                   </div>
                   <div class="form-check">
                       <input class="form-check-input" type="checkbox" value="Node" name="languages[]">
                       <label class="form-check-label">
                           Node JS
                       </label>
                   </div>
                   <div class="form-check">
                       <input class="form-check-input" type="checkbox" value="Javascript" name="languages[]">
                       <label class="form-check-label">
                           Javascript
                       </label>
                   </div>

                   <button type="submit" class="btn btn-success mt-4">Gonder</button>
               </form>
            </div>

        </div>

    </div>









<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>