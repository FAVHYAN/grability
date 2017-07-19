$(document).ready(function(){
	$('#search').focus();

	$('#search').on('keyup', function(){
		var search = $('#search').val();
		console.log(search);
		$.ajax({
			type: 'POST',
			url: 'GetModal.php',
			data: {'search': search},
			beforeSend: function(response){
				$('.alt_page_navigation').hide();
				$('.allHeros').hide();
				$('.result').html(response);
			}
		})
		.done(function(response){
			$('.result').html(response)
		})
		.fail(function(){
			alert('Hubo un error');
		})
	})


	$("#sort_by").change(function() {
		var sort_by = $('#sort_by').val();
		console.log(sort_by);
		$.ajax({
			type: 'POST',
			url: 'sortBy.php',
			data: {'sort_by': sort_by},
			beforeSend: function(response){
				$('.alt_page_navigation').hide();
				$('.allHeros').hide();
				$('.result').html(response);
			}
		})
		.done(function(response){
			$('.result').html(response)
		})
		.fail(function(){
			alert('Hubo un error');
		})
		});

	// paginator

		$('#paging_container').pajinate({
					items_per_page : 10,
					item_container_id : '.alt_content',
					nav_panel_id : '.alt_page_navigation'
					
				});

		
	    $('.detail').click( function () {
		     var Id = $(this).data('id');
				$.ajax({
					type: 'POST',
					url: 'modalcUrlDetail.php',
					data: {'hero': Id},
					success: function(response){
						$('.resultModalDetail').html(response);
					}
				})
		     document.getElementById("contentFull").style.filter = "blur(7px)";
			 document.getElementById("contentFull").style.WebkitFilter = "blur(7px)";
		     document.getElementById("contentFullPage").style.filter = "blur(7px)";
			 document.getElementById("contentFullPage").style.WebkitFilter = "blur(7px)";
		});

	// id modal
	    $('.open-AddBookDialog').click( function () {
		     var myBookId = $(this).data('id');
				$.ajax({
					type: 'POST',
					url: 'modalcUrl.php',
					data: {'comic': myBookId},
					success: function(response){
						$('.resultModal').html(response);
					}
				})
		     document.getElementById("contentFull").style.filter = "blur(7px)";
			 document.getElementById("contentFull").style.WebkitFilter = "blur(7px)";
		     document.getElementById("contentFullPage").style.filter = "blur(7px)";
			 document.getElementById("contentFullPage").style.WebkitFilter = "blur(7px)";
		});

	    $('.btn-default').click( function () {
		     document.getElementById("contentFull").style.filter = "blur(0)";
			 document.getElementById("contentFull").style.WebkitFilter = "blur(0)";
		     document.getElementById("contentFullPage").style.filter = "blur(0)";
			 document.getElementById("contentFullPage").style.WebkitFilter = "blur(0)";
		});
	    $('.close').click( function () {
		     document.getElementById("contentFull").style.filter = "blur(0)";
			 document.getElementById("contentFull").style.WebkitFilter = "blur(0)";
		     document.getElementById("contentFullPage").style.filter = "blur(0)";
			 document.getElementById("contentFullPage").style.WebkitFilter = "blur(0)";
		});
	    $('.modal').click( function () {
		     document.getElementById("contentFull").style.filter = "blur(0)";
			 document.getElementById("contentFull").style.WebkitFilter = "blur(0)";
		     document.getElementById("contentFullPage").style.filter = "blur(0)";
			 document.getElementById("contentFullPage").style.WebkitFilter = "blur(0)";
		});


});


		function favorite(id){ 
			
						$('.modal').modal('hide');
			$.ajax({
					type: 'POST',
					url: 'addFavorite.php',
					data: {'comic': id},
					success: function(response){
						$('.favoriteAdd').html(response);
					}
				})
		}


	