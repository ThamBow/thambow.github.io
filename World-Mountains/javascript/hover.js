// JavaScript Document

var docWidth = document.body.clientWidth;

$( document ).ready( function() {


	$( ".nav li a" ).each( function() {
		if ( $( this ).next().length > 0 ) { //Anchor points with more than one other anchor point after to be classsed as parents
			$( this ).addClass( "parent" );
		};
	} )

	$( ".toggleMenu" ).click( function( e ) {
		e.preventDefault();
		$( ".nav" ).toggle();
	} );
	adjustMenu();
} );

function adjustMenu(){

	if ( docWidth < 1084 ) {
		$( ".toggleMenu" ).css( "display", "inline-block" );
		

		$( ".nav li a.parent" ).click( function( e ) {

			e.preventDefault();
			$( this ).parent("li").toggleClass( 'hover' ) //Clicking on the anchor tag initialises ('li') item, however reloads page as it is a link.
			
			
			
		} ); //closing this function

	} else {


		$(".toggleMenu").css("display", "none");

		$( ".nav li " ).hover( function() {
			$( this ).addClass( 'hover' );
		}, function() {
			$( this ).removeClass( 'hover' );
		} );
	}

}


/*Some content from Tessa Thornton13 Sep 2012 - Big Menus, Small Screens: Responsive, Multi-Level Navigation */