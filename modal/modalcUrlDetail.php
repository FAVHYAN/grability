<?php
require '../lib/configure.php';
$hero = $_POST['hero'];

$cadena = str_replace(" ","%20",$hero);
$url = "https://gateway.marvel.com:443/v1/public/characters?name=".$cadena."&ts=".$CGD['cod']['ts']."&apikey=".$CGD['cod']['public']."&hash=".$CGD['cod']['hash'];

require '../lib/obj.php';

?>
<script type="text/javascript">
	
	    $('.open-AddBookDialog').click( function () {
		     var myBookId = $(this).data('id');
				$.ajax({
					type: 'POST',
					url: 'modal/modalcUrl.php',
					data: {'comic': myBookId},
					success: function(response){
						$('#modalHeroDetail').hide();
					     document.getElementById("contentFull").style.filter = "blur(7px)";
						 document.getElementById("contentFull").style.WebkitFilter = "blur(7px)";
					     document.getElementById("contentFullPage").style.filter = "blur(7px)";
						 document.getElementById("contentFullPage").style.WebkitFilter = "blur(7px)";
						$('.resultModal').html(response);
					}

				});
		});

	    $('.btn-default').click( function () {
						$('#modalHeroDetail').show();
		     document.getElementById("contentFull").style.filter = "blur(0)";
			 document.getElementById("contentFull").style.WebkitFilter = "blur(0)";
		     document.getElementById("contentFullPage").style.filter = "blur(0)";
			 document.getElementById("contentFullPage").style.WebkitFilter = "blur(0)";
		});
	    $('.close').click( function () {
						$('#modalHeroDetail').show();
		     document.getElementById("contentFull").style.filter = "blur(0)";
			 document.getElementById("contentFull").style.WebkitFilter = "blur(0)";
		     document.getElementById("contentFullPage").style.filter = "blur(0)";
			 document.getElementById("contentFullPage").style.WebkitFilter = "blur(0)";
		});
	    $('.modal').click( function () {
						$('#modalHeroDetail').show();
		     document.getElementById("contentFull").style.filter = "blur(0)";
			 document.getElementById("contentFull").style.WebkitFilter = "blur(0)";
		     document.getElementById("contentFullPage").style.filter = "blur(0)";
			 document.getElementById("contentFullPage").style.WebkitFilter = "blur(0)";
		});
</script>
<?php
            echo '<div class="modal-header">
              				  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						<img src="img/icons/btn-close.png"/></button> 
		           		<div class="row">
		             		<div class="col-md-5"><img src="'.$obj->data->results[0]->thumbnail->path.'.'.$obj->data->results[0]->thumbnail->extension.'" width="200"></div>
                			<div class="col-md-7 modalTitle">'.$obj->data->results[0]->name.'</div>
		             		<div class="col-md-7">'.$obj->data->results[0]->description.'</div>
		             		<p>
		             		<div class="col-md-12">
		             		<div class="col-md-9 modalTitle">Lista de comics</div>
		             		<div class="col-md-9">
		             		<table class="table table-hover">
							  <thead>
							    <tr>
							      <th>Nombre Comic</th>
							    </tr>
								  </thead>
								  <tbody>';
					             		for($i=0;$i<=$obj->data->results[0]->comics->available;$i++){
					             			$id = $obj->data->results[0]->comics->items[$i]->resourceURI;
					             			$comic = explode("comics/", $id);
					             				echo '<tr>
												    <th><a data-toggle="modal" style="float: left;width: 100%;" data-id="'.$comic[1].'" title="Add this item" class="open-AddBookDialog " href="#modalHero">'.$obj->data->results[0]->comics->items[$i]->name.'</a></th></tr>';
									             		}

		             							echo '</tbody>
											</table>
										</div>
		             				</div>
		             			</p>
		             		</div>
		             </div>
		             </div>';

		    ?>