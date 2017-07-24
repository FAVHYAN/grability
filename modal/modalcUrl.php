<?php
require '../lib/configure.php';
$comic = $_POST['comic'];
$url =  "http://gateway.marvel.com/v1/public/comics/".$comic."?ts=".$CGD['cod']['ts']."&apikey=".$CGD['cod']['public']."&hash=".$CGD['cod']['hash'];
require '../lib/obj.php';


            echo '<div class="modal-header">
              				  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						<img src="img/icons/btn-close.png"/></button> 
		           		<div class="row">
		             		<div class="col-md-5"><img src="'.$obj->data->results[0]->images[0]->path.'.'.$obj->data->results[0]->images[0]->extension.'" width="200"></div>
                			<div class="col-md-7 modalTitle">'.$obj->data->results[0]->title.'</div>
		             		<div class="col-md-7">'.$obj->data->results[0]->description.'</div>
		             		</div>
		             </div>
		            	 <div class="row contentMenuModal">
		             		<a class="col-md-6 contentModalAdd"  href="javascript:favorite('.$obj->data->results[0]->id.')"><span class="contentModalAddIcon"></span>ADDED TO FAVOURITES</a>
		             		<a class="col-md-6 contentModal" href="javascript:favorite('.$obj->data->results[0]->id.')"><img src="img/icons/shopping-cart-primary.png"/>Buy For $'.$obj->data->results[0]->prices[1]->price.'</a></div> 
		             	 </div>
		             </div>';

		    ?>