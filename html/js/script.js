//    $(document).ready(function(e){
//
//  document.addEventListener('contextmenu', event => event.preventDefault());
// });


$(document).ready(function(){
   $('.collapsible').collapsible();
 });

 $(document).ready(function(){
      $('.carousel.carousel-slider').carousel({fullWidth: true});
    });


$(document).ready(function(){
     $('.parallax').parallax();
   });

	$(document).ready(function(){
      $('.carousel').carousel();
    });

    $(document).ready(function(){
  $('.slider').slider();
//  $('.slider').indicator(false);
});

$(document).ready(function(){
  // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
  $('.modal').modal();
});
$(document).ready(function(){

  $('.dropdown-link').dropdown({
        inDuration: 300,
        outDuration: 225,
        constrainWidth: false, // Does not change width of dropdown to that of the activator
        hover: true, // Activate on hover
        gutter: 0, // Spacing from edge
        belowOrigin: true, // Displays dropdown below the button
        alignment: 'left', // Displays dropdown with edge aligned to the left of button
        stopPropagation: false // Stops event propagation
      }
    );
});


$(document).ready(function() {
    $('select').material_select();
  });


  $(document).ready(function(){
    $('.lightBox').lightBox();
  });

      // jQuery(window).load(function(){
      //     // jQuery("#preloader").fadeIn();
  		// 		$('#preloader').fadeOut()});
      //
      // });

$(document).ready(function() {

  $("#round").click(function(){

  $("#content").load("Products/round.php");

  });

  $("#polo").click(function(){

  $("#content").load("Products/polo.php");

  });


  $("#frame").click(function(){

//  $("#content").load("Products/frames.php");
  getDataFromUrl("Products/frames.php");
  });

  $("#crystal").click(function(){

  $("#content").load("Products/crystal.php");

  });
  $("#leather").click(function(){

  $("#content").load("Products/leather.php");

  });

  $("#bags").click(function(){

  $("#content").load("Products/bag.php");

  });

  $("#stationary").click(function(){

  $("#content").load("Products/stationary.php");

  });

  $("#gold").click(function(){

  $("#content").load("Products/goldfoil.php");

  });

  $("#gifts").click(function(){

  $("#content").load("Products/giftsets.php");

  });

  $("#pen").click(function(){

  $("#content").load("Products/pen.php");

  });

  $("#sipper").click(function(){

  $("#content").load("Products/sipper.php");

  });

  $("#keychain").click(function(){

  $("#content").load("Products/keychain.php");

  });

  $("#desktop").click(function(){

  $("#content").load("Products/desktopparticle.php");

  });

  $("#cg_misc").click(function(){

  $("#content").load("Products/cg_misc.php");

  });

  $("#led").click(function(){

  $("#content").load("Products/led.php");

  });

  $("#sweatshirts").click(function(){

  $("#content").load("Products/sweatshirts.php");

  });
  $("#jacket").click(function(){

  $("#content").load("Products/jackets.php");

  });
  $("#hoodies").click(function(){

  $("#content").load("Products/hoodies.php");

  });
  $("#pendrive").click(function(){

  $("#content").load("Products/pendrives.php");

  });
  $("#powerbank").click(function(){

  $("#content").load("Products/powerbanks.php");

  });
  $("#it_misc").click(function(){

  $("#content").load("Products/it_misc.php");

  });
  $("#school").click(function(){

  $("#content").load("Products/school.php");

  });
  $("#hospital").click(function(){

  $("#content").load("Products/hospitality.php");

  });
  $("#formal").click(function(){

  $("#content").load("Products/formal.php");

  });
  $("#security").click(function(){

  $("#content").load("Products/security.php");

  });

  $("#uni_misc").click(function(){

  $("#content").load("Products/uni_misc.php");

  });


});
