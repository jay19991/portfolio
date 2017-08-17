/**

    Autoplay Enabled.
        Pause on Hover: True;
    Pause on Dots: False;
    Pause on Focus: True;

        Autoplay should now correctly pause/resume when
    mouseenter / mouseleave.
    
    Mouse / focus events should
    not affect the pause state of slider.

**/

var xpaused = false;
var previous = 0;
var poh = true;
var pof = true;

$(".pause").on("click", function() {
    if( xpaused ) {
    $(".slider").slick("play");
  } else {
    $(".slider").slick("pause");
  }
  xpaused = !xpaused;
  $(this).toggleClass( "paused" );
});


$(".go").on("click", function() {
    var r = Math.floor( Math.random() * 6 );
  if ( r === previous ) { r = r + 2; }
    $(".slider").slick("goTo", r );
  previous = r;
});

$(".poh").on("click", function() {
    $(".slider").slick("setOption", "pauseOnHover", !poh, true );
  poh = !poh;
  $(this).toggleClass( "paused" );
});

$(".pof").on("click", function() {
    $(".slider").slick("setOption", "pauseOnFocus", !pof, true );
  pof = !pof;
  $(this).toggleClass( "paused" );
});

$(".slider").slick({
    autoplay: true,
    autoplaySpeed: 5000,
    pauseOnHover: true,
    pauseOnFocus: true,
    dots: true,
    responsive: [{ 
        breakpoint: 500,
        settings: {
            dots: false,
            arrows: false,
            infinite: false,
            slidesToShow: 3,
            slidesToScroll: 3
        } 
    }]
});
