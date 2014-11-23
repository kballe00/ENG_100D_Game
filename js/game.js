$(function(){
  $("#prompt .options").on("click", "a", function(e){
    e.preventDefault();
    
    $.ajax({
      type: 'POST',
      url: 'helpers/catcher.php',
      data: {
        "status": $(this).prop('class')
      },
      dataType: 'json',
      success: function( data ){
        if( data.response == "success" ){
          
          $("." + data.var).next(".val").text("$" + data[data.var]);
          
          setTimeout(function(){
            window.location.href = "game";
          }, 500);
          
        } else if( data.response == "failure" ) {
        
          alert("You will be reminded about this expense.");
        
          setTimeout(function(){
            window.location.href = "game";
          }, 500);
        
        }
      }
    });
  });
});