$(document).ready(function() {
	$('#nav-home').click(function(){
		$('.sub-section').hide();
		$('#home').show();
	});
	
	$('#nav-installation').click(function(){
		$('.sub-section').hide();
		$('#installation').show();
	});
	
	$('#nav-customize').click(function(){
		$('.sub-section').hide();
		$('#customize').show();
	});
	
	$('#nav-faq').click(function(){
		$('.sub-section').hide();
		$('#faq').show();
	});
	
	$('#nav-contact').click(function(){
		$('.sub-section').hide();
		$('#contact').show();
	});
});