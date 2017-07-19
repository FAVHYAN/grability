<?php
require 'lib/configure.php';
	$url =  "http://gateway.marvel.com/v1/public/comics?ts=".$CGD['cod']['ts']."&apikey=".$CGD['cod']['public']."&hash=".$CGD['cod']['hash'];

						$curl = curl_init($url);
						curl_setopt($curl, CURLOPT_URL, $url);
						$json = file_get_contents($url);
						$obj = json_decode($json);
						$numRep = 100;
						for($i=0;$i<=2;$i++){
							$num = rand(1,20);
							if(!empty($obj->data->results[$num]->images[0]->path)){
								if($numRep != $num){
						?>

						<a href=""><img src="img/icons/btn-delete.png" class="deleteFavorite"/></a>
								           		<img src="<?php echo $obj->data->results[$num]->images[0]->path.'.'.$obj->data->results[$num]->images[0]->extension ?>" width="200">
								           		<br><br>
								           		<label class="titleMenuSub"><?php echo $obj->data->results[$num]->title ?></label>
						<?php
							}
						}else{
							$i = 1;
						}
						$numRep = $num;
						}

?>

						