
 var menu = document.querySelector(".menu");
 var nav = document.querySelector(".nav");
 var closeNav = document.querySelector(".close-btn");
 var body = document.getElementsByTagName("BODY")[0];

 
 //to add a class in plain javascript
 //classList.add("classname");
 menu.addEventListener("click", function (){
    nav.classList.remove("not-active");
    nav.classList.add("active1");
 });

 closeNav.addEventListener("click", function (){
       nav.classList.remove("active1");
       nav.classList.add("not-active");
 });
var num = 80;
$(window).bind('scroll', function () {
    if ($(window).scrollTop() > num) {
        $('.navbar-1').addClass('fixed');
    } else {
        $('.navbar-1').removeClass('fixed');
    }
});

$(window).scroll(function () {
    if ($(this).scrollTop() >= 50) {
        $('#return-to-top').fadeIn(500);
    } else {
        $('#return-to-top').fadeOut(500);
    }
});
$('#return-to-top').click(function () {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});


var num = 80;
$(window).bind('scroll', function () {
    if ($(window).scrollTop() > num) {
        $('.navbar-1').addClass('fixed');
    } else {
        $('.navbar-1').removeClass('fixed');
    }
});

$('#rol').change(function () {
    if ($(this).val() === 'Student') {
       $(".profile").removeClass("fas fa-user-tie").addClass("fas fa-user-graduate");
    } else if ($(this).val() === 'Administrator'){
        $(".profile").removeClass("fas fa-user-graduate").addClass("fas fa-user-tie");
    }  else
        $(".profile").removeClass("fas fa-user-tie fas fa-user-graduate").addClass("fas fa-chalkboard-teacher");
});


