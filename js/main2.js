$(document).ready(function(){

	$('ul.sub li a:first').addClass('active2');
	$('.secciones article').hide();
	$('.secciones article:first').show();
	

	$('ul.sub li a').click(function(){
		$('ul.sub li a').removeClass('active2');
		$(this).addClass('active2');
		$('.secciones article').hide();

		var activeTab2 = $(this).attr('href');
		$(activeTab2).show();
		return false;
	});

});

