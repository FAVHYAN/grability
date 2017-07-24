<?php

require '../lib/configure.php';

$name = $_POST['search'];
$url = $CGD['cod']['url']['name'].$name;

require "../lib/obj.php";

for($i = 0;$i<10;$i++){

$idComic = $obj->data->results[$i]->comics->items[0]->resourceURI;
$comic = explode("comics/", $idComic);

$idComicDos = $obj->data->results[$i]->comics->items[1]->resourceURI;
$comicDos = explode("comics/", $idComicDos);

$idComicTres = $obj->data->results[$i]->comics->items[2]->resourceURI;
$comicTres = explode("comics/", $idComicTres);

$idComicCuatro = $obj->data->results[$i]->comics->items[3]->resourceURI;
$comicCuatro = explode("comics/", $idComicCuatro);

if(!empty($obj->data->results[$i]->name) || $obj->data->results[$i]->thumbnail->path != ""){

?>
<script type="text/javascript">

	
		
	    $('.detail').click( function () {
		     var Id = $(this).data('id');
				$.ajax({
					type: 'POST',
					url: 'modal/modalcUrlDetail.php',
					data: {'hero': Id},
					success: function(response){
						$('.resultModalDetail').html(response);
					}
				});
		     document.getElementById("contentFull").style.filter = "blur(7px)";
			 document.getElementById("contentFull").style.WebkitFilter = "blur(7px)";
		     document.getElementById("contentFullPage").style.filter = "blur(7px)";
			 document.getElementById("contentFullPage").style.WebkitFilter = "blur(7px)";
		});

		// search open dialog

	    $('.open-AddBookDialog-search').click( function () {
		     var myId = $(this).data('id');
				$.ajax({
					type: 'POST',
					url: 'modal/modalcUrl.php',
					data: {'comic': myId},
					success: function(response){
						$('.resultModalSearch').html(response);
					}
				});
		     document.getElementById("contentFull").style.filter = "blur(7px)";
			 document.getElementById("contentFull").style.WebkitFilter = "blur(7px)";
		     document.getElementById("contentFullPage").style.filter = "blur(7px)";
			 document.getElementById("contentFullPage").style.WebkitFilter = "blur(7px)";
		});

</script>
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
				<a data-toggle="modal" data-id="<?php echo $obj->data->results[$i]->name ?>" title="Add this item" class="detail btn btn-view" href="#modalHeroDetail">VIEW MORE</a>
			</div>
			<div class="col-md-12">				
			<div class="col-md-12"><span class="subTitleHero">Related commics</span></div>
				<div class="col-md-6">	<a data-toggle="modal" data-id="<?php echo $comic[1] ?>" title="Add this item" class="open-AddBookDialog-search" href="#modalHeroSearch">
					<?php echo $obj->data->results[$i]->comics->items[0]->name ?>
					</a>
				</div>
				<div class="col-md-6">	<a data-toggle="modal" data-id="<?php echo $comicDos[1] ?>" title="Add this item" class="open-AddBookDialog-search" href="#modalHeroSearch">
					<?php echo $obj->data->results[$i]->comics->items[1]->name ?>
					</a>
				</div>
				<div class="col-md-6">	<a data-toggle="modal" data-id="<?php echo $comicTres[1] ?>" title="Add this item" class="open-AddBookDialog-search" href="#modalHeroSearch">
					<?php echo $obj->data->results[$i]->comics->items[2]->name ?>
					</a>
				</div>
				<div class="col-md-6">	<a data-toggle="modal" data-id="<?php echo $comicCuatro[1] ?>" title="Add this item" class="open-AddBookDialog-search" href="#modalHeroSearch">
					<?php echo $obj->data->results[$i]->comics->items[3]->name ?>
					</a>
				</div>
			</div>
		</div>
<?php
	}
}
?>
