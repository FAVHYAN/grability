<?php

require_once 'header.php';
require 'lib/configure.php';
$url = $CGD['cod']['url']['all'];
require "lib/obj.php";

$idComic = $obj->data->results[0]->comics->items[0]->resourceURI;
$comic = explode("comics/", $idComic);

$idComicDos = $obj->data->results[0]->comics->items[1]->resourceURI;
$comicDos = explode("comics/", $idComicDos);

$idComicTres = $obj->data->results[0]->comics->items[2]->resourceURI;
$comicTres = explode("comics/", $idComicTres);

$idComicCuatro = $obj->data->results[0]->comics->items[3]->resourceURI;
$comicCuatro = explode("comics/", $idComicCuatro);



?>


<div class="container-fluid" id="contentFullPage">
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
			<div id="wrapper">			
				<div id="paging_container">				
					<ul class="alt_content">
						<?php
							for($i = 0;$i<$obj->data->limit;$i++){
							?><li><p>
								<div class="contentHero allHeros">
										<div class="col-md-6">
											<img class="img-circle" src="<?php echo $obj->data->results[$i]->thumbnail->path.".".$obj->data->results[$i]->thumbnail->extension?>" width="200" height="200" />
										</div>
										<div class="col-md-6">
											<span class="titleHero"><?php echo  $obj->data->results[$i]->name; ?></span>
										</div>
										<span class="col-md-6 description"><?php echo  substr($obj->data->results[$i]->description,0,100); ?>...</span>
										<div class="col-md-6"></div>
										<div class="col-md-6">
											<input type="hidden" value="<?php echo $obj->data->results[$i]->id ?>" />
											<a data-toggle="modal" data-id="<?php echo $obj->data->results[$i]->id ?>" title="Add this item" class="open-AddBookDialog btn btn-view" href="#modalHero">VIEW MORE</a>
										</div>
										<div class="col-md-12">				
										<div class="col-md-12"><span class="subTitleHero">Related commics</span></div>
										<div class="col-md-6">
											<a data-toggle="modal" data-id="<?php echo $comic[1] ?>" title="Add this item" class="open-AddBookDialog" href="#modalHero" ><?php echo $obj->data->results[$i]->comics->items[0]->name ?></a>
										</div>
										<div class="col-md-6">
											<a data-toggle="modal" data-id="<?php echo $comicDos[1] ?>" title="Add this item" class="open-AddBookDialog" href="#modalHero"><?php echo $obj->data->results[$i]->comics->items[1]->name ?></a>
										</div>
										<div class="col-md-6">
											<a data-toggle="modal" data-id="<?php echo $comicTres[1] ?>" title="Add this item" class="open-AddBookDialog" href="#modalHero"><?php echo $obj->data->results[$i]->comics->items[2]->name ?></a>
										</div>
										<div class="col-md-6">
											<a data-toggle="modal" data-id="<?php echo $comicCuatro[1] ?>" title="Add this item" class="open-AddBookDialog" href="#modalHero"><?php echo $obj->data->results[$i]->comics->items[3]->name ?></a>
										</div>
									</div>
								</div>
						</p></li> 
						<?php
						}
						?>
					</ul>
					<div class="alt_page_navigation col-md-12"></div>
				</div>				
			</div>
		</div>
		<div class="col-md-2">

				<div class="row">
					<div class="col-sm-12 contentFavorites">
						<img src="img/icons/favourites.png" class="imgfavorites"/>
						<label class="favorites">My favorites</label>
						<br>
					</div>
				</div>
				<div>
					<span class="favoriteAdd"></span>
				</div>
				<div>
					<?php

					require 'chooseAdd.php';

					?>
				</div>
		</div>
</div>
<?php
require 'modal.php';
require_once 'footer.php';
?>