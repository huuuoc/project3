/**
 * Twenty Fourteen Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Customizer preview reload changes asynchronously.
 */
( function( $ ) {
	
	$('.tab-link-agency li').click(function(){
		if (!$(this).hasClass('active')) {
			var id = $(this).attr('lang');
			$('.tab-link-agency li.active').removeClass('active');
			$('.tabcontent > div.active').removeClass('active');
			$(this).addClass('active'); 
			$('.tabcontent '+id).addClass('active'); 
		}
		
	});
} )( jQuery );