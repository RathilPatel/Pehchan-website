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

$('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrainWidth: false, // Does not change width of dropdown to that of the activator
      hover: false, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
    }
  );
