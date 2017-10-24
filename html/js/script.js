   $(document).ready(function(e){

 document.addEventListener('contextmenu', event => event.preventDefault());
});


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
$('.slider').indicator(false);
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

  var preloader;

  function preload(opacity) {
      if(opacity <= 0) {
          showContent();
      }
      else {
          preloader.style.opacity = opacity;
          window.setTimeout(function() { preload(opacity - 0.05) }, 100);
      }
  }

  function showContent() {
      preloader.style.display = 'none';
      document.getElementById('content').style.display = 'block';
  }

  document.addEventListener("DOMContentLoaded", function () {
      preloader = document.getElementById('preloader');
      preload(1);
  });

$("#round").onclick(function(){

$("#content").load("Products/round.php");

});

$("#polo").onclick(function(){

$("#content").load("Products/polo.php");

});


$("#frame").onclick(function(){

$("#content").load("Products/frames.php");

});

$("#crystal").onclick(function(){

$("#content").load("Products/crystal.php");

});
$("#leather").onclick(function(){

$("#content").load("Products/leather.php");

});

$("#bags").onclick(function(){

$("#content").load("Products/bag.php");

});

$("#stationary").onclick(function(){

$("#content").load("Products/stationary.php");

});

$("#gold").onclick(function(){

$("#content").load("Products/goldfoil.php");

});

$("#gifts").onclick(function(){

$("#content").load("Products/giftsets.php");

});

$("#pen").onclick(function(){

$("#content").load("Products/pen.php");

});

$("#sipper").onclick(function(){

$("#content").load("Products/sipper.php");

});

$("#keychain").onclick(function(){

$("#content").load("Products/keychain.php");

});

$("#desktop").onclick(function(){

$("#content").load("Products/desktopparticle.php");

});

$("#cg_misc").onclick(function(){

$("#content").load("Products/cg_misc.php");

});

$("#led").onclick(function(){

$("#content").load("Products/led.php");

});

$("#sweatshirts").onclick(function(){

$("#content").load("Products/sweatshirts.php");

});
$("#jacket").onclick(function(){

$("#content").load("Products/jackets.php");

});
$("#hoodies").onclick(function(){

$("#content").load("Products/hoodies.php");

});
$("#pendrive").onclick(function(){

$("#content").load("Products/pendrives.php");

});
$("#powerbank").onclick(function(){

$("#content").load("Products/powerbanks.php");

});
$("#it_misc").onclick(function(){

$("#content").load("Products/it_misc.php");

});
$("#school").onclick(function(){

$("#content").load("Products/school.php");

});
$("#hospital").onclick(function(){

$("#content").load("Products/hospitality.php");

});
$("#formal").onclick(function(){

$("#content").load("Products/formal.php");

});
$("#security").onclick(function(){

$("#content").load("Products/security.php");

});

$("#uni_misc").onclick(function(){

$("#content").load("Products/uni_misc.php");

});
