function ajax_delete(btn){
	var id=$(btn).text();
	var index_of_id=id.search('X');
	id=id.substring(0,index_of_id);
	

	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
	});


	$.ajax({
		url:"delete/"+id,
		success: function(msg){
			
			$('#delete-infor').append('<div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>'+msg+'</strong></div>');
		    setTimeout(function(){ location.reload(); }, 1500);

	}
	});

}

function check_click_edit_content(){
	$('#submit').show();
}
