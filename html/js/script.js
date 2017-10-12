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
});

$(document).ready(function(){
  // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
  $('.modal').modal();
});
  
