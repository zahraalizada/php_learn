<!-- -->

<?php
$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_URL => 'http://localhost/PhP/lesson_tayfun/test-site',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_REFERER => 'https://www.wikipedia.org/'
]);

$source = curl_exec($ch);
curl_close($ch);

echo $source;


?>