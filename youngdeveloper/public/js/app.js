CREATE_POST = '#createPost';


function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function(e) {
			$('#blah').attr('src', e.target.result).width(150).height(200);
		};

		reader.readAsDataURL(input.files[0]);
	}
}


// for create post
function pickerSelectCategory(){
	$('#selectpicker_category_post').on('change', function() {
		$('#createPost input[name=idCategory]').val($(this).val());
	});
}


//for create post
function createPost(){
	$(CREATE_POST).on('sbmit', function() {
		$(CREATE_POST).find('.')
	});
}


$(document).ready(function() {
	pickerSelectCategory();
	registerUser();
	loginUser();
});
