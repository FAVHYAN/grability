<?php

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

?>

<div class="contentHero">
			<div class="col-md-6">
				<img class="img-circle" src="<?php echo $obj->data->results[0]->thumbnail->path.".".$obj->data->results[0]->thumbnail->extension?>" />
			</div>
			<div class="col-md-6">
				<span class="titleHero"><?php echo  $obj->data->results[0]->name; ?></span>
			</div>
			<div class="col-md-6"></div>
			<span class="col-md-6"><?php echo  substr($obj->data->results[0]->description,100); ?>...</span>
			<div class="col-md-10">
				<input type="text" value="<?php echo $obj->data->results[0]->id ?>" />
				<a href="" class="btn btn-view">VIEW MORE</a>
			</div>
			<div class="col-md-12">				
			<div class="col-md-12"><span class="subTitleHero">Related commics</span></div>
				<div class="col-md-6">
				<a href="<?php echo $obj->data->results[0]->comics->items[0]->resourceURI ?>" >
				<?php echo $obj->data->results[0]->comics->items[0]->name ?></a>
				</div>
				<div class="col-md-6">
				<a href="<?php echo $obj->data->results[0]->comics->items[1]->resourceURI ?>" >
				<?php echo $obj->data->results[0]->comics->items[1]->name ?></a>
				</div>
				<div class="col-md-6">
				<a href="<?php echo $obj->data->results[0]->comics->items[2]->resourceURI ?>" >
				<?php echo $obj->data->results[0]->comics->items[2]->name ?></a>
				</div>
				<div class="col-md-6">
				<a href="<?php echo $obj->data->results[0]->comics->items[3]->resourceURI ?>" >
				<?php echo $obj->data->results[0]->comics->items[3]->name ?></a>
				</div>
			</div>
		</div>

