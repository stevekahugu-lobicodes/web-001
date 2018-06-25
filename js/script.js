$(function(){
	$('#alertMe').click(function(e){
		e.preventdefault();
		$('#successAlert').slideDown();
	});

});