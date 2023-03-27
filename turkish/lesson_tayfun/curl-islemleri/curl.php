<?php

// curl baslat
$ch = curl_init();

// curl ayarlari
curl_setopt_array($ch, [
    CURLOPT_URL => 'http://blog.adw.org',
    CURLOPT_RETURNTRANSFER => true
]);

// curl istegi calistirildi
$source = curl_exec($ch);

// curl sonlandir
curl_close($ch);

preg_match('/<title>(.*?)<\/title>/', $source, $title);

echo '<pre>';
print_r($title);
echo '</pre>';

?>