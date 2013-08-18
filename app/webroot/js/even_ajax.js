$(document).ready(function(){
	$('.idamd').click(function(){
		$.ajax({
		  type: "GET",
		  url: $(this).attr('href')
		  }).done(function(html_form) {
		  $('#bod').html(html_form);
		  $("#myModal").modal("show");
		});
		return false;
	});
	$('.ok').click(function(){	
		$.ajax({
    	type: "GET",
		url: $(this).attr('href')
		}).done(function(html_form) {
		$('#bod').html(html_form);
        $("#myModal").modal('hide'); 
		setTimeout(function(){
 		$("#myModal").modal("show");},2000);					 
		});
		return false;
	});
	/*$('#ok').submit(function(){	
		$.ajax({
    	type: "POST",
		url: $(this).attr('href'),
		data: $(this).serialize()
		}).done(function(html_form) {
		$('#bod').html(html_form);
        $("#myModal").modal('hide'); 
		setTimeout(function(){
 		$("#myModal").modal("show");},2000);					 
		});
		return false;
	});*/

});