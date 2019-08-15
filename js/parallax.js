$(document).ready(function() {
    $(window).bind('scroll', function(e){
        parallax();
    });

    $('a#getToKnowMe').click(function(){
        $('html, body').animate({ scrollTop:$('#aboutMe').offset().top }, 1000);
        return false;
    });

    $('a#next').click(function(){
        $('html, body').animate({ scrollTop:$('#title2').offset().top }, 1000);
        return false;
    });

    $('a#explore').click(function(){
        $('html, body').animate({ scrollTop:$('#joinUs').offset().top }, 1000);
        return false;
    });

    $('a#questions').click(function(){
        $('html, body').animate({ scrollTop:$('#form').offset().top }, 1000);
        return false;
    });

    $('a#arrow').click(function(){
        $('html, body').animate({ scrollTop:$('#header').offset().top }, 1000);
        return false;
    });


});


function parallax(){
    var scrollPosition = $(window).scrollTop();
    $('#background_container').css('top', (0 - (scrollPosition* 0.2))+'px');
    $('#linkContainer').css('top', (450 - (scrollPosition* 0.2))+'px');
    $('#getToKnowMe').css('top', (450 - (scrollPosition* 0.2))+'px');
    // $('#aboutMe').css('top', (620 - (scrollPosition* 1))+'px');
}