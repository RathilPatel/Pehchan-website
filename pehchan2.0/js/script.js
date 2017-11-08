
    $(document).ready(function(){
      $('.parallax').parallax();
      $('.modal').modal();
      $("#pushdown").hide();
    });


      var options = [
        {selector: '#pushdown', offset:0, callback: function(e) {
          $("#pushdown").fadeIn("slow");
          )
        } },
        {selector: '#page1',offset:50,callback: function(e){
        $("#page1").fadeIn("");  
        }
      },
        {},
      ];
      Materialize.scrollFire(options);
