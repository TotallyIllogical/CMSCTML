/*var intervalId;
var slidetime = 2500; //milliseconds between slides

$( document ).ready( function() {

	instervalID = setInterval( cycleImage , slidetime );

	$( ".slider-bigbox .desc" ).show();
	$( ".slider-bigbox .desc .big-text" ).animate( { opacity: 0.85 }, 1 );

	$( ".small-box" li:first ).addClass( 'active' );

	$( "a.collapse" ).click( function() {
		$( ".slider-bigbox .desc .big-text" ).slideToggle();
		$( "a.collapse" ).toggleClass( "show" );
	});
	function cycleImage() {
		var onLastLi = $( ".small-box li:last" ).hasClass( "active" );
		var currentImg = $( ".small-box li.active" );

		if ( onLastLi ) {
			var nextImg = $( ".small-box li:first");
		}
		else {
			var nextImg = $( ".small-box li.active" ).next();
		}
		$( currentImg ).removeClass( "active" );
		$( nextImg ).addClass( "active" );

		var imgSrc = $( nextImage ).find( 'img' ).attr( "src" );
		var imgText = $( nextImage ).find( ".small-text" ).html();

		$( ".slider-bigbox .desc .big-text" ).animate( { opacity: 0 }, 250, function {
			$( ".slider-bigbox .desc .big-text" ).html( imgText ).animate( { opacity: 0.85, margonBottom: "0" }, 250 );
			$( ".slider-bigbox .big-image" ).attr( { src: imgSrc } );
		});
	};

});*/

