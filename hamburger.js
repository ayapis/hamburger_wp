// jQuery( function( $ ){
//   $( ".c-button-open" ).on( "click", function() {
//     $( "aside" ).toggleClass( "is-open" );
//     $( this ).toggleClass( "is-open" );
//   } );
// } );

jQuery( function( $ ){
  $(window).on('load resize', function(){
    var w = $(window).width();
    var x = 768;
    if (w <= x) {
      //画面サイズが768px以下のときの処理
      $( ".c-button-open" ).on( "click", function() {
        $( ".l-aside" ).addClass( "is-open" );
        $( ".c-button-close" ).addClass( "is-open" );
        $( ".l-aside__title" ).css( 'display' , 'none' );
      } );
      $( ".c-button-close" ).on( "click", function() {
        $( ".l-aside" ).removeClass( "is-open" );
        $( ".c-button-close" ).removeClass( "is-open" );
        $( ".l-aside__title" ).css( 'display' , '' );
      } );
    }
  });
} );