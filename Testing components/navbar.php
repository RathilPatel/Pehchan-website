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


    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
      <li><a href="#!" id="tshirtround">one</a></li>
      <li><a href="#!" id="ledshirt">two</a></li>
      <li class="divider"></li>
      <li><a href="#!">three</a></li>
    </ul>
    <nav>
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="sass.html">Sass</a></li>
          <li><a href="badges.html">Components</a></li>
          <!-- Dropdown Trigger -->
          <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
      </div>
    </nav>


      <div id="content">

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
        $("#content").load("led.php");
    });

    $("#tshirtround").click(function(){
      $("#content").load("round.php");
    });
    </script>
  </body>
</html>
