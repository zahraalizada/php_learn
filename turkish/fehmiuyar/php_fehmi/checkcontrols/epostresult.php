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


            <?php
            $text = $_POST['myText'];
            if (empty($text)) {
                echo "Bos birakilamaz";
            } else {
                $pattern = "/^[a-zA-Z0-9\.\_-]+@[a-z]+(.[a-z0-9]+)?\.[a-z]{2,}(.[a-z0-9]{2})?$/";
                $result = preg_match($pattern, $text, $takeNumber);
                if ($result == 1) {
                    echo "$takeNumber[0]";
                } else {
                    echo "Girilen E-posta formati gecerli degil";
                }
            }

            echo "<br>";


            ?>


        </div>

    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>


