
function createComment(){
	$(document).on('submit', '#formCreateComment', function(e) {

		e.preventDefault();

		/*$('input+small').text('');
		$('input').parent().removeClass('has-error');*/
/*
		$.ajax({
			method : $(this).attr('method'),
			url : $(this).attr('action'),
			data : $(this).serialize(),
			dataType : "html"
		}).done(function(response) {
			console.log($(response)); 
			var replaceValue = $(response).find('#login_section').html();
			$('#login_section').html(replaceValue);
			$('#myModal_Login').modal('hide');
		}).fail(function(data) {
			$.each(JSON.parse(data.responseText), function(key, value) {
				var input = '#formLogin input[name=' + key + ']';
				$(input + '+small').text(value);
				$(input).parent().addClass('has-error');
			});
		});*/
		
		$.ajax({
		    type:'POST',
		    url:  $(this).attr('action'),
		    data: $(this).serialize(),
		    dataType : "html",
		    success:function(data){
		       console.log(data);
		    }
		 });
		
	});
}



