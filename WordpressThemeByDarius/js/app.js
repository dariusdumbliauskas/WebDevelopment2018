
jQuery(document).ready(function($){
	
	$(document).on('click','.open-search a', function(event){
		console.log('clicked');
		event.preventDefault();
		$('.search-form-container').slideToggle(300);
	});	
	
});