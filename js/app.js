
//Back to top button

var btn = $('#button');

$(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});
var topnav = $('#topnavbar');
$(window).scroll(function () {
    if ($(window).scrollTop() > 100) {
        topnav.addClass('down');
        
    } else {
        topnav.removeClass('down');

    }
});

btn.on('click', function (e) {
    $('html, body').animate({
        scrollTop: 0
    }, 500);
});

//
var xyy=5;