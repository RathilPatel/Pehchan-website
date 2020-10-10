/*$(document).ready(function (e) {
    $('[data-fancybox="group"]').fancybox({
        thumbs: {
            autoStart: true
        },
        buttons: [
                'zoom',
                'close'
            ]
    });
});*/

$(document).ready(function () {

    $('.fancybox').fancybox();

});

$(document).ready(function (e) {
    $('.slideshow').slick({
        autoplay: true,
    });

});
$(document).ready(function () {
    $('.carousel').carousel();
    // $('.carousel').carousel({fullWidth: true});
    $('.carousel').carousel({
        dist: 100
    });

    $('.carousel.carousel-slider').carousel({
        fullWidth: true
    });
});


// Next slide
$('.carousel').carousel('next');
$('.carousel').carousel('next', 3); // Move next n times.
// Previous slide
$('.carousel').carousel('prev');
$('.carousel').carousel('prev', 4); // Move prev n times.
// Set to nth slide
$('.carousel').carousel('set', 4);


$(document).ready(function () {
    $('.parallax').parallax();
    $('.modal').modal();
});

/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}






$(document).ready(function () {

    $(".filter-button").click(function () {
        var value = $(this).attr('data-filter');

        if (value == "all") {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        } else {
            //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
            //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.' + value).hide('3000');
            $('.filter').filter('.' + value).show('3000');

        }
    });

    if ($(".filter-button").removeClass("active")) {
        $(this).removeClass("active");
    }
    $(this).addClass("active");

});

function TestMethod(){
    console.log("Get Here to see if the filter button was clicked and entered the Test Method!");
}
documnent.getElementByClassName("filter-button").addEventListener("click", TestMethod);

document.addEventListener('contextmenu', event => event.preventDefault());
