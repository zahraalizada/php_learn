<?php
require 'db.php';
$iller =$db->query('SELECT * FROM iller ORDER BY plaka_no ASC')->fetchAll(PDO::FETCH_ASSOC);
$ilceler =$db->query('SELECT * FROM ilceler ORDER BY il_plaka ASC')->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Il-Ilce uygulamasi || Tayfun Erbilen</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="app.js"></script>

</head>
<body>

<ul>
    <li>
        <h3>İl</h3>
        <select name="il" id="il">
            <option value="">-İl Seçin-</option>
            <?php  foreach ($iller as $il):  ?>
            <option value="<?= $il['plaka_no'] ?>">
                <?= $il['il_adi'] ?>
            </option>
            <?php  endforeach; ?>
        </select>
    </li>
    <li>
        <h3>İlçe</h3>
        <select name="ilce" id="ilce" disabled>
            <option value="">-İlçe Seçin-</option>

        </select>
    </li>
</ul>




</body>
</html>