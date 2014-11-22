
$("#login form").submit(function(event){event.preventDefault()});
    var username = $(this).find("input[name=username]").val();
    var password = $(this).find("input[name=password]").val();
    
    $.post("../helpers/checklogin.php"{username,password},location.herf="home")
            .fail(alerted);
};

function alerted () {
    alert("failed login");
}

