( function($){
	$('figure.wp-caption.aligncenter').removeAttr('style');
	$('img.aligncenter').wrap('<figure class="centered-image"/>');

	// if figure.centered-image has caption, give caption width of image
	function sizeCenteredCaption( elem ) {
		var target_width = $( elem ).siblings('img').width();
		if ( target_width < window.innerWidth ) {
			$( elem ).width( target_width );
		}
	}

	$('figure.aligncenter .wp-caption-text').each( function(){ 
		sizeCenteredCaption( $(this) ); 
	});
	$(window).resize( function() {
		$('figure.aligncenter .wp-caption-text').each( function(){ 
			sizeCenteredCaption( $(this) ); 
		});
	});

} )(jQuery);

