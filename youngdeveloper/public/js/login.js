registerUser = function() {
	$('#register').click(function() {
		$('#myModal_Register').modal();
	});

	$(document).on('submit', '#formRegister', function(e) {

		e.preventDefault();

		$('input+small').text('');
		$('input').parent().removeClass('has-error');

		$.ajax({
			method : $(this).attr('method'),
			url : $(this).attr('action'),
			data : $(this).serialize(),
			dataType : "json"
		}).done(function(data) {
			$('.alert-success').removeClass('hidden');
			$('#myModal_Register').modal('hide');

			var username = $('#formRegister input[name=email]').val();
			var password = $('#formRegister input[name=password]').val();
			$('#formLogin input[name=loginname]').val(username);
			$('#formLogin input[name=password]').val(password);
			$('#formLogin').submit();

		}).fail(function(data) {
			$.each(data.responseJSON, function(key, value) {
				var input = '#formRegister input[name=' + key + ']';
				$(input + '+small').text(value);
				$(input).parent().addClass('has-error');
			});
		});
	});
}

loginUser = function() {
	$('#login').click(function() {
		$('#myModal_Login').modal();
	});

	$(document).on('submit', '#formLogin', function(e) {

		e.preventDefault();

		$('input+small').text('');
		$('input').parent().removeClass('has-error');

		$.ajax({
			method : $(this).attr('method'),
			url : $(this).attr('action'),
			data : $(this).serialize(),
			dataType : "html"
		}).done(function(response) {
			console.log(response)
			/* 	var item = data.find();
			$('.alert-success').removeClass('hidden');
			$('#myModal_Login').modal('hide');
			$('#login_section').replaceWith('hide'); */
			var replaceValue = $(response).find('#login_section').html();
			$('#login_section').html(replaceValue);
			$('#myModal_Login').modal('hide');
		}).fail(function(data) {
			$.each(JSON.parse(data.responseText), function(key, value) {
				var input = '#formLogin input[name=' + key + ']';
				$(input + '+small').text(value);
				$(input).parent().addClass('has-error');
			});
		});
	});
}