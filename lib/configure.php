<?php

$CGD['cod']['public'] = 'b3113aaf033bc17284797879a577d209';
$CGD['cod']['private'] = 'efe2978ae17eeeec13ccdf560096fdeb0b46042e';
$CGD['cod']['ts'] = 1;
$CGD['cod']['hash'] = md5($CGD['cod']['ts'].$CGD['cod']['private'].$CGD['cod']['public']);

//URL

$CGD['cod']['url']['all'] = "https://gateway.marvel.com:443/v1/public/characters?ts=1&apikey=".$CGD['cod']['public']."&hash=".$CGD['cod']['hash'];
$CGD['cod']['url']['name'] = "https://gateway.marvel.com:443/v1/public/characters?ts=1&name=";
?>