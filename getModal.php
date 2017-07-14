<?php


require 'lib/configure.php';


$name = $_POST['search'];
$url = $CGD['cod']['url']['name'].$name."&apikey=".$CGD['cod']['public']."&hash=".$CGD['cod']['hash'];

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_close ($curl);
$json = file_get_contents($url);
$obj = json_decode($json);

if(!empty($obj->data->results[0]->name)){
?>

<div class="contentHero">
			<div class="col-md-7">
				<img class="img-circle" src="<?php echo $obj->data->results[0]->thumbnail->path.".".$obj->data->results[0]->thumbnail->extension?>" width="200" height="200" />
			</div>
			<div class="col-md-5">
				<span class="titleHero"><?php echo  $obj->data->results[0]->name; ?></span>
			</div>
			<span class="col-md-5"><?php echo  substr($obj->data->results[0]->description,100); ?>...</span>
			<div class="col-md-7"></div>
			<div class="col-md-5">
				<input type="hidden" value="<?php echo $obj->data->results[0]->id ?>" />
				<a data-toggle="modal" data-target="#deleteMessage" class="btn btn-view">VIEW MORE</a>
			</div>
			<div class="col-md-12">				
			<div class="col-md-12"><span class="subTitleHero">Related commics</span></div>
				<div class="col-md-6">
					<?php echo $obj->data->results[0]->comics->items[0]->name ?>
				</div>
				<div class="col-md-6">
					<?php echo $obj->data->results[0]->comics->items[1]->name ?>
				</div>
				<div class="col-md-6">
					<?php echo $obj->data->results[0]->comics->items[2]->name ?>
				</div>
				<div class="col-md-6">
					<?php echo $obj->data->results[0]->comics->items[3]->name ?>
				</div>
			</div>
		</div>
<?php
}else{
	echo '<div id="contenedor">
                 <div class="loader" id="loader">Loading...</div>
 		  </div>';
}
?>
