$(function(){
  $("#login form").submit(function(event){
    event.preventDefault();
  
    var user = $(this).find("input[name=username]").val(),
        pass = $(this).find("input[name=password]").val();
    
    $.ajax({
      type: "POST",
      url: "helpers/checklogin.php",
      data: {
        "username" : user,
        "password" : pass
      },
      dataType: "json",
      success: function(data){
        if( data.response == "success" ){
          window.location.href = "home";
        } else {
          alert("failed login");
        }
      }
    });
  });
});