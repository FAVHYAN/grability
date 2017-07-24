<?php



require '../lib/myFavorites.php';



						for($i=0;$i<=100;$i++){
						if(!empty($obj->data->results[$i]->images[0]->path)){
							echo $i;
								
						?>

						<a href=""><img src="../img/icons/btn-delete.png" class="deleteFavorite"/></a>
								           		<img src="<?php echo $obj->data->results[$i]->images[0]->path.'.'.$obj->data->results[$i]->images[0]->extension ?>" width="200">
								           		<br><br>
								           		<label class="titleMenuSub"><?php echo $obj->data->results[$i]->title ?></label>
						<?php
						}
						}

?>

						