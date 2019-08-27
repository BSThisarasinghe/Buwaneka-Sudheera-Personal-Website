$(document).ready(function() {
    $(window).bind('scroll', function(e){
        parallax();
    });

    $('a#getToKnowMe').click(function(){
        $('html, body').animate({ scrollTop:$('#aboutMe').offset().top }, 1000);
        return false;
    });

    $('a#homeButton').click(function(){
        $('html, body').animate({ scrollTop:$('#home').offset().top }, 1000);
        return false;
    });

    $('a#aboutButton').click(function(){
        $('html, body').animate({ scrollTop:$('#aboutMe').offset().top }, 1000);
        return false;
    });

    $('a#workButton').click(function(){
        $('html, body').animate({ scrollTop:$('#works').offset().top }, 1000);
        return false;
    });

    $('a#experienceButton').click(function(){
        $('html, body').animate({ scrollTop:$('#experience').offset().top }, 1000);
        return false;
    });

    $('a#contactButton').click(function(){
        $('html, body').animate({ scrollTop:$('#contact').offset().top }, 1000);
        return false;
    });
});


function parallax(){
    var scrollPosition = $(window).scrollTop();
    $('#background_container').css('top', (0 - (scrollPosition* 0.2))+'px');
    $('#linkContainer').css('top', (450 - (scrollPosition* 0.2))+'px');
    $('#getToKnowMe').css('top', (450 - (scrollPosition* 0.2))+'px');
}