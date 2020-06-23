// <!-- Statement of Authorship “I, Ayub Ali, student number 000354446, certify that this material is my original work. No other person's work has been used without due acknowledgement and I have not made my work available to anyone else. -->

$(document).ready(function () {
    $(".email").click(function (e) { 
        e.preventDefault();
        
        $(".email").animate({
            fontSize:"18px",
            borderWidth:"2px"
        })
    });
    $(".password").click(function (e) { 
        e.preventDefault();
        
        $(".password").animate({
            fontSize:"18px",
            borderWidth:"2px"
        })
    });

    $(".login-button").mouseenter(function (e) { 
        e.preventDefault();

        $(".login-button").css("background-color","DeepSkyBlue ");
        $(".login-button").css("color","white");
    });
    $(".login-button").mouseout(function (e) { 
        e.preventDefault();
        $(".login-button").css("background-color","white");
        $(".login-button").css("color","black");
    });

    // signup
    $(".signup-button").mouseenter(function (e) { 
        e.preventDefault();

        $(".signup-button").css("background-color","DeepSkyBlue ");
        $(".signup-button").css("color","white");
    });
    $(".signup-button").mouseout(function (e) { 
        e.preventDefault();
        $(".signup-button").css("background-color","white");
        $(".signup-button").css("color","black");
    });

    $(".profile").mouseenter(function (e) { 
        e.preventDefault();
        $(".profile").css("color","DeepSkyBlue ");
    });
    $(".profile").mouseout(function (e) { 
        e.preventDefault();
        $(".profile").css("color","white ");
    });

    // profile-colour
    $(".color-button").click(function (e) { 
        e.preventDefault();
        let x = $(".profile-colour").val();
        let newColour = $(".jumbotron").css("background-color",x);

        
    });

});