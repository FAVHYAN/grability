<?php

require 'configure.php';
	$url =  "http://gateway.marvel.com/v1/public/comics?limit=100&ts=".$CGD['cod']['ts']."&apikey=".$CGD['cod']['public']."&hash=".$CGD['cod']['hash'];

require 'obj.php';
						

?>