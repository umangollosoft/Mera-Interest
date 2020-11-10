// $( function() {
//     $( "#cal-range" ).slider({
//         range: "min",
//         value: 0,
//         min: 0,
//         max: 100000,
//         step: 1000,
//         slide: function( event, ui ) {
//         $( "#cal-amount" ).val( ui.value + " USD" );
//         }
//     });
//     $( "#cal-amount" ).val($( "#cal-range" ).slider( "value" ) + " USD");
// } );
// $( function() {
//     $( "#cal-year-range" ).slider({
//         range: "min",
//         value: 0,
//         min: 0,
//         max: 10,
//         step: 1,
//         slide: function( event, ui ) {
//         $( "#cal-year" ).val( ui.value + " Year" );
//         }
//     });
//     $( "#cal-year" ).val($( "#cal-year-range" ).slider( "value" ) + " Year");
// } );
// $( function() {
//     $( "#cal-month-range" ).slider({
//         range: "min",
//         value: 0,
//         min: 0,
//         max: 12,
//         step: 1,
//         slide: function( event, ui ) {
//         $( "#cal-month" ).val( ui.value + " Month" );
//         }
//     });
//     $( "#cal-month" ).val($( "#cal-month-range" ).slider( "value" ) + " Month");
// } );

$( function() {
  $( "#cal-range" ).slider({
      range: "min",
      value: 0,
      min: 0,
      max: 100000,
      step: 1000,
      slide: function( event, ui ) {
      $( "#cal-amount" ).val( ui.value);
      }
  });
  $( "#cal-amount" ).val($( "#cal-range" ).slider( "value" ));
} );
$( function() {
  $( "#cal-year-range" ).slider({
      range: "min",
      value: 0,
      min: 0,
      max: 10,
      step: 1,
      slide: function( event, ui ) {
      $( "#cal-year" ).val( ui.value);
      }
  });
  $( "#cal-year" ).val($( "#cal-year-range" ).slider( "value" ));
} );
$( function() {
  $( "#cal-month-range" ).slider({
      range: "min",
      value: 0,
      min: 0,
      max: 12,
      step: 1,
      slide: function( event, ui ) {
      $( "#cal-month" ).val( ui.value);
      }
  });
  $( "#cal-month" ).val($( "#cal-month-range" ).slider( "value" ));
} );
//Smooth Scroll
// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });