<?php
require 'lib/configure.php';
$comic = $_POST['comic'];
$url =  "http://gateway.marvel.com/v1/public/comics/".$comic."?ts=".$CGD['cod']['ts']."&apikey=".$CGD['cod']['public']."&hash=".$CGD['cod']['hash'];

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
$json = file_get_contents($url);
require "lib/obj.php";

?>

						<a href=""><img src="img/icons/btn-delete.png" class="deleteFavorite"/></a>
		           		<img src="<?php echo $obj->data->results[0]->images[0]->path.'.'.$obj->data->results[0]->images[0]->extension ?>" width="200">
		           		<br><br>
		           		<label class="titleMenuSub"><?php echo $obj->data->results[0]->title ?></label>


