
    $(document).ready(function(){
      $('.parallax').parallax();
      $('.modal').modal();
    });

      $(document).ready(function(){
        $('.navi').pushpin({
          top: 0,
          offset: 0
        });
      });


      $(document).ready(function(){
        $(".button-collapse").sideNav();

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


          jQuery(window).load(function(){
              jQuery(".hameid-loader-overlay").fadeOut(500);
          });
  

      $(document).ready(function() {
          $('select').material_select();
        });




      $(document).ready(function() {

        $("#frame").click(function(){
          $("#content").load("frame.php");
        });

        $("#led").click(function(){

          getDataFromUrl("led.php");

        });

        $("#product").click(function(){

          getDataFromUrl("producthome.html");

        });

        $("#round").click(function(){

$("#content").load("round.php");
        });
      });
