<?php


require 'lib/configure.php';

$name = $_POST['search'];
$url = $CGD['cod']['url']['name'].$name;

require "lib/obj.php";

<<<<<<< HEAD
for($i = 0;$i<10;$i++){
if(!empty($obj->data->results[$i]->name) || $obj->data->results[$i]->thumbnail->path != ""){

=======
if(!empty($obj->data->results[0]->name)){

for($i = 0;$i<10;$i++){

>>>>>>> 715e3ac7e41c139c3d8a3067f7fb7e67c466f106
?>
<div class="contentHero">
			<div class="col-md-7">
				<img class="img-circle" src="<?php echo $obj->data->results[$i]->thumbnail->path.".".$obj->data->results[$i]->thumbnail->extension?>" width="200" height="200" />
			</div>
			<div class="col-md-5">
				<span class="titleHero"><?php echo  $obj->data->results[$i]->name; ?></span>
			</div>
<<<<<<< HEAD
			<span class="col-md-5"><?php echo substr($obj->data->results[$i]->description,0,100); ?>...</span>
=======
			<span class="col-md-5"><?php echo  substr($obj->data->results[$i]->description,100); ?>...</span>
>>>>>>> 715e3ac7e41c139c3d8a3067f7fb7e67c466f106
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
<<<<<<< HEAD
=======
}else{
	echo '<div id="contenedor">
                 <div class="loader" id="loader">Loading...</div>
 		  </div>';
>>>>>>> 715e3ac7e41c139c3d8a3067f7fb7e67c466f106
}
?>
