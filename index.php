<?php

require_once 'header.php';
require 'lib/configure.php';
$url = $CGD['cod']['url']['all'];
require "lib/obj.php";

?>


<div class="container-fluid">
		<div class="col-md-10 back-content">
				<div class="row top-title">
					<div class="col-md-9">					
						<img src="img/icons/characters.png" class="character-icon"/>
						<h1>Characters</h1>
					</div>
					<div class="col-md-2">					
						<select id="sort_by" class="form-control valid">
							<option name="0">Sort By</option>
							<option name="name">Name</option>
							<option name="modified">Modified</option>
						</select>
					</div>
				</div>
<!-- get details of search and order by hero -->
<div class="result"></div>
<?php
for($i = 0;$i<$obj->data->limit;$i++){

?>
		<div class="contentHero allHeros">
			<div class="col-md-7">
				<img class="img-circle" src="<?php echo $obj->data->results[$i]->thumbnail->path.".".$obj->data->results[$i]->thumbnail->extension?>" width="200" height="200" />
			</div>
			<div class="col-md-5">
				<span class="titleHero"><?php echo  $obj->data->results[$i]->name; ?></span>
			</div>
			<span class="col-md-5"><?php echo  substr($obj->data->results[$i]->description,0,100); ?>...</span>
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
?>

</div>
<div class="col-md-2">

				<div class="row">
					<div class="col-sm-12 contentFavorites">
						<img src="img/icons/favourites.png" class="imgfavorites"/>
						<label class="favorites">My favorites</label>
					</div>
				</div>
</div>
<?php
require 'modal.php';
require_once 'footer.php';
?>