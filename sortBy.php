<?php


require 'lib/configure.php';

$order = $_POST['sort_by'];

if($order == 'Name'){	
$url = $CGD['cod']['url']['order-name'];
}else if($order == 'Modified'){
$url = $CGD['cod']['url']['order-modified'];
}
require "lib/obj.php";

for($i = 0;$i<10;$i++){
if(!empty($obj->data->results[$i]->name) || $obj->data->results[$i]->thumbnail->path != ""){

?>
<div class="contentHero">
			<div class="col-md-7">
				<img class="img-circle" src="<?php echo $obj->data->results[$i]->thumbnail->path.".".$obj->data->results[$i]->thumbnail->extension?>" width="200" height="200" />
			</div>
			<div class="col-md-5">
				<span class="titleHero"><?php echo  $obj->data->results[$i]->name; ?></span>
			</div>
			<span class="col-md-5"><?php echo substr($obj->data->results[$i]->description,0,100); ?>...</span>
			<div class="col-md-7"></div>
			<div class="col-md-5">
				<input type="hidden" value="<?php echo $obj->data->results[$i]->id ?>" />
				<a data-toggle="modal" data-target="#deleteMessage" class="btn btn-view">VIEW MORE</a>
			</div>
			<div class="col-md-12">				
			<div class="col-md-12"><span class="subTitleHero">Related commics</span></div>
				<div class="col-md-6">
					<?php echo $obj->data->results[$i]->comics->items[0]->name ?>
				</div>
				<div class="col-md-6">
					<?php echo $obj->data->results[$i]->comics->items[1]->name ?>
				</div>
				<div class="col-md-6">
					<?php echo $obj->data->results[$i]->comics->items[2]->name ?>
				</div>
				<div class="col-md-6">
					<?php echo $obj->data->results[$i]->comics->items[3]->name ?>
				</div>
			</div>
		</div>
<?php
	}
}
?>