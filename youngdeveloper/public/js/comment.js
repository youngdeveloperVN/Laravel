
function createComment(){
	$(document).on('submit', '#formCreateComment', function(e) {
		$.ajax({
		    type:'POST',
		    url:  $(this).attr('action'),
		    data: $(this).serialize(),
		    dataType : "html",
		    success:function(data){
		    
		    	var replaceValue = $(data).find('#listComment').html();
				$('#listComment').html(replaceValue);
				
				var fromCreateComment = $(data).find('#formCreateComment').html();
				$('#formCreateComment').html(fromCreateComment);
				
			
		    }
		 });
		
	});
}

window.onload = function() {
	$('li.newSubComment').addClass('hide');
	$('i.fa-reply').click(function() {
		
	    	$this = $(this);
	    	$comment = $this.closest('.comment-itemt');
	    	//show item first
	    	$comment.find('li.newSubComment').removeClass('hide');
	});
}