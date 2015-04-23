

$( document ).ready( function() {

	$( ".slider-bigbox .desc" ).show();
	$( "#big-text" ).animate( { opacity: 0.85 }, 1 );

	$( ".slider-smallbox .smallbox:first" ).addClass( 'active' );

	$( "a.collapse" ).click( function() {
		$( "#big-text" ).slideToggle();
		$( "a.collapse" ).toggleClass( "show" );
	});

	$( ".slider-smallbox .smallbox" ).click( function (){
		var imageSrc = $( this ).find( 'img' ).attr( "src" );
		var imageText = $( this ).find( '.small-text' ).html();
		console.log(imageText);

		if( $( this ).hasClass( "active" ) ) {
			return false;
		} else {
			$( ".slider-bigbox" ).animate( { opacity: 0.3 }, 250, function() {
				$( "#big-image" ).attr( { src: imageSrc } );
				$( "#big-text").html( imageText ).animate( { opacity: 0.85 }, 250 );
				$( ".slider-bigbox" ).animate( { opacity: 1 }, 250 );
			});
		}
		$( ".slider-smallbox .smallbox" ).removeClass( 'active' );
		$( this ).addClass( 'active' );


	});

});
