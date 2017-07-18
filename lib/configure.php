<?php


// Details

$CGD['cod']['public'] = 'b3113aaf033bc17284797879a577d209';
$CGD['cod']['private'] = 'efe2978ae17eeeec13ccdf560096fdeb0b46042e';
$CGD['cod']['ts'] = time();
$CGD['cod']['hash'] = md5($CGD['cod']['ts'].$CGD['cod']['private'].$CGD['cod']['public']);

//URL

<<<<<<< HEAD
$CGD['cod']['url']['all'] = "http://gateway.marvel.com/v1/public/characters?limit=100&ts=".$CGD['cod']['ts']."&apikey=".$CGD['cod']['public']."&hash=".$CGD['cod']['hash'];
$CGD['cod']['url']['order-name'] = "https://gateway.marvel.com:443/v1/public/characters?ts=".$CGD['cod']['ts']."&orderBy=name&apikey=".$CGD['cod']['public']."&hash=".$CGD['cod']['hash'];
$CGD['cod']['url']['order-modified'] = "https://gateway.marvel.com:443/v1/public/characters?ts=".$CGD['cod']['ts']."&orderBy=modified&apikey=".$CGD['cod']['public']."&hash=".$CGD['cod']['hash'];
$CGD['cod']['url']['name'] = "https://gateway.marvel.com:443/v1/public/characters?ts=".$CGD['cod']['ts']."&apikey=".$CGD['cod']['public']."&hash=".$CGD['cod']['hash']."&orderBy=name&nameStartsWith=";



?>
=======
$CGD['cod']['url']['all'] = "https://gateway.marvel.com:443/v1/public/characters?ts=1&apikey=".$CGD['cod']['public']."&hash=".$CGD['cod']['hash'];
$CGD['cod']['url']['name'] = "https://gateway.marvel.com:443/v1/public/characters?ts=1&nameStartsWith=";
?>
>>>>>>> 715e3ac7e41c139c3d8a3067f7fb7e67c466f106
