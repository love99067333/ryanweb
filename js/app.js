
//Back to top button
console.log(0)
var btn = $('#button');

$(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
        console.log(0)
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
    console.log(0)
    $('html, body').animate({
        scrollTop: 0
    }, 500);
});

//
var xyy=5;