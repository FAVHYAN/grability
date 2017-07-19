<?php
require 'lib/configure.php';
$hero = $_POST['hero'];


$url = "https://gateway.marvel.com:443/v1/public/characters?name=".$hero."&ts=".$CGD['cod']['ts']."&apikey=".$CGD['cod']['public']."&hash=".$CGD['cod']['hash'];

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
$json = file_get_contents($url);
$obj = json_decode($json);


            echo '<div class="modal-header">
              				  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						<img src="img/icons/btn-close.png"/></button> 
		           		<div class="row">
		             		<div class="col-md-5"><img src="'.$obj->data->results[0]->thumbnail->path.'.'.$obj->data->results[0]->thumbnail->extension.'" width="200"></div>
                			<div class="col-md-7 modalTitle">'.$obj->data->results[0]->title.'</div>
		             		<div class="col-md-7">'.$obj->data->results[0]->description.'</div>
		             		</div>
		             </div>
		             </div>';

		    ?>