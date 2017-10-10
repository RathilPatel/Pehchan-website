   $(document).ready(function(e){

 document.addEventListener('contextmenu', event => event.preventDefault());
});


$(document).ready(function(){
   $('.collapsible').collapsible();
 });

 $(document).ready(function(){
      $('.carousel.carousel-slider').carousel({fullWidth: true});
    });
autoplay()
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 4500);
}

$(document).ready(function(){
     $('.parallax').parallax();
   });
