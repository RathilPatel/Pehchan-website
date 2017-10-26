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

    getDataFromUrl("round.php");

  });

  $("#polo").click(function(){

    getDataFromUrl("polo.php");

  });


  $("#frame").click(function(){

//  $("#content").load("frames.php");
  getDataFromUrl("frames.php");
  });

  $("#crystal").click(function(){

    getDataFromUrl("crystal.php");

  });
  $("#leather").click(function(){

    getDataFromUrl("leather.php");

  });

  $("#bags").click(function(){

    getDataFromUrl("bag.php");

  });

  $("#stationary").click(function(){

    getDataFromUrl("stationary.php");

  });

  $("#gold").click(function(){

    getDataFromUrl("goldfoil.php");

  });

  $("#gifts").click(function(){

    getDataFromUrl("giftsets.php");

  });

  $("#pen").click(function(){

    getDataFromUrl("pen.php");

  });

  $("#sipper").click(function(){

    getDataFromUrl("sipper.php");

  });

  $("#keychain").click(function(){

    getDataFromUrl("keychain.php");

  });

  $("#desktop").click(function(){

    getDataFromUrl("desktopparticle.php");

  });

  $("#cg_misc").click(function(){

    getDataFromUrl("cg_misc.php");

  });

  $("#led").click(function(){

    getDataFromUrl("led.php");

  });

  $("#sweatshirts").click(function(){

    getDataFromUrl("sweatshirts.php");

  });
  $("#jacket").click(function(){

    getDataFromUrl("jackets.php");

  });
  $("#hoodies").click(function(){

    getDataFromUrl("hoodies.php");

  });
  $("#pendrive").click(function(){

    getDataFromUrl("pendrives.php");

  });
  $("#powerbank").click(function(){

    getDataFromUrl("powerbanks.php");

  });
  $("#it_misc").click(function(){

    getDataFromUrl("it_misc.php");

  });
  $("#school").click(function(){

    getDataFromUrl("school.php");

  });
  $("#hospital").click(function(){

    getDataFromUrl("hospitality.php");

  });
  $("#formal").click(function(){

    getDataFromUrl("formal.php");

  });
  $("#security").click(function(){

    getDataFromUrl("security.php");

  });

  $("#uni_misc").click(function(){

    getDataFromUrl("uni_misc.php");

  });


});
