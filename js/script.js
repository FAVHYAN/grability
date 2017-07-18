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
});