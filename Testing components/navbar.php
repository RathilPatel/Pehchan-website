<html>
  <head>
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

     <script src="../materialize/js/materialize.min.js"></script>

       <link rel="stylesheet" href="../materialize/css/materialize.min.css">
      <script src="../js/script.js"></script>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../../font-awesome-4.7.0/css/font-awesome.min.css">
  </head>
  <body>

    <nav>
       <div class="nav-wrapper black">
         <ul id="nav-mobile" class="center ">
           <li><a class='dropdown-link' href='#' data-activates='tshirts'>Tshirts</a></li>
           <li><a class='dropdown-link' href='#' data-activates='cgifts'>Corporate Gifting</a></li>
           <li><a class='dropdown-link' href='#' data-activates='led'>LED Tshirt</a></li>
           <li><a class='dropdown-link' href='#' data-activates='snj'>Sweatshirt & Jackets</a></li>
           <li><a class='dropdown-link' href='#' data-activates='it'>IT Products</a></li>
           <li><a class='dropdown-link' href='#' data-activates='uniform'>Uniforms</a></li>
         </ul>
       </div>
     </nav>

    <ul id="tshirts" class="dropdown-content">
      <li><a href="#" id="round">Round neck</a></li>
    </ul>

    <ul id='led' class='dropdown-content'>
         <li><a href="#" id="led" class="black-text">LED Tshirts</a></li>
    </ul>

    <ul id='cgifts' class='dropdown-content'>
        <li><a href="#" id="frame" class="black-text">Frames</a></li>
        <li><a href="#" id="crystal" class="black-text">Crystal Gifts</a></li>
        <li><a href="#" id="leather" class="black-text">Leather Gifts</a></li>
        <li><a href="#" id="apparels" class="black-text">Apparels</a></li>
        <li><a href="#" id="bag" class="black-text">Bags</a></li>
        <li><a href="#" id="stationary" class="black-text">Office Stationary</a></li>
        <li><a href="#" id="gold" class="black-text">Gold Foil Article</a></li>
        <li><a href="#" id="gifts" class="black-text">Gift sets</a></li>
        <li><a href="#" id="pen" class="black-text">Pens</a></li>
        <li><a href="#" id="sipper" class="black-text">Sipper	Bottles</a></li>
        <li><a href="#" id="keychain" class="black-text">Keychains</a></li>
        <li><a href="#" id="desktop" class="black-text">Desktop Article</a></li>
        <li><a href="#" id="cg_misc" class="black-text">Miscellaneous</a></li>
    </ul>


      <ul id='snj' class='dropdown-content'>
        <li><a href="#" id="sweatshirts" class="black-text">Sweatshirts</a></li>
        <li><a href="#" id="jacket" class="black-text">Jackets</a></li>
        <li><a href="#" id="hoodies" class="black-text">Hoodies</a></li>
      </ul>

      <ul id='it' class='dropdown-content'>
        <li><a href="#" id="pendrive" class="black-text">Pendrives</a></li>
        <li><a href="#" id="powerbank" class="black-text">Powerbanks</a></li>
        <li><a href="#" id="it_misc" class="black-text">Miscellaneous</a></li>
      </ul>

      <ul id='uniform' class='dropdown-content'>
        <li><a href="#" id="school" class="black-text">School Uniforms</a></li>
        <li><a href="#" id="hospital" class="black-text">Hospitality Uniforms</a></li>
        <li><a href="#" id="formal" class="black-text">Formals</a></li>
        <li><a href="#" id="security" class="black-text">Security Uniforms</a></li>
        <li><a href="#" id="uni_misc" class="black-text"  >Miscellaneous</a></li>
      </ul>




      <div class="content">

      </div>

    <script>
    function getDataFromUrl(urlWithContent)
    {
      // jQuery async request
      $.ajax(
      {
          url: urlWithContent,
          dataType: "html",
          success: function(data) {
                                      return $('#content').html(data);
                                  },
          error: function(e)
          {
              alert('Error: ' + e);
          }
      });
    }
    </script>
    <script type="text/javascript">
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


    $("#led").click(function(){
        getDataFromUrl("bag.php");
    });
    </script>
  </body>
</html>
