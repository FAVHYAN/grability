$(document).ready(function(){
	$('#search').focus();

	$('#search').on('keyup', function(){
		var search = $('#search').val();
		console.log(search);
		$.ajax({
			type: 'POST',
			url: 'getModal.php',
			data: {'search': search},
			beforeSend: function(response){
				$('.allHeros').hide();
				$('.result').text(response);
			}
		})
		.done(function(response){
			$('#result').html(response)
		})
		.fail(function(){
			alert('Hubo un error');
		})
	})

});