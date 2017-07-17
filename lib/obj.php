<?php
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
$json = file_get_contents($url);
$obj = json_decode($json);
?>