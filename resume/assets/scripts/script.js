
$(document).ready(function(){

    // $("#element").slideUp(2000);

    $("#element").slideDown(2000);
    
    
    $(document).scroll(function(){
        $(".primary").show(3000);
    })

    $("#about").mouseenter(function(){
     $("#about .about-info p").animate({opacity:0.1},1000);
    $("#about .about-info p").animate({opacity:0.4},1000);
    $("#about .about-info p").animate({opacity:1},3000);
    
    })

    $("#contact").mouseenter(function(){
        $("#contact .contact-info").fadeOut(1000);
        $("#contact .contact-info").fadeIn(1000);
    })


  });



