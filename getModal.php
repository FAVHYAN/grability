<?php


// llegada de parametros enviados por metodo get desde sandbox.php
// --------------------------------------------

$keyPublic = 'b3113aaf033bc17284797879a577d209';
$keyPrivate = 'efe2978ae17eeeec13ccdf560096fdeb0b46042e';
$ts = 1;
$hash = md5($ts.$keyPrivate.$keyPublic);

$name = $_POST['search'];

$url = "https://gateway.marvel.com:443/v1/public/characters?ts=1&name=".$name."&apikey=".$keyPublic."&hash=".$hash;
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
// $result = curl_exec($curl);

curl_close ($curl);


$json = file_get_contents($url);
$obj = json_decode($json);
echo '<br>';
echo $obj->data->results[0]->id;
echo '<br>';
echo $obj->data->results[0]->name;
echo '<br>';
echo $obj->data->results[0]->description;
echo '<br>';
echo  '<img src="'.$obj->data->results[0]->thumbnail->path.'.'.$obj->data->results[0]->thumbnail->extension.'" />';
echo '<pre>';
print_r($obj);