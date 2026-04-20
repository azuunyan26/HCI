
 var menu = document.querySelector(".menu");
 var nav = document.querySelector(".nav-1");
 var closeNav = document.querySelector(".close");
 var body = document.getElementsByTagName("BODY")[0];


 //to add a class in plain javascript
 //classList.add("classname");
 menu.addEventListener("click", function (){
    nav.classList.remove("not-active");
    nav.classList.add("active1");
    body.classList.add("overlay");
 });

 closeNav.addEventListener("click", function (){
       nav.classList.remove("active1");
       nav.classList.add("not-active");
       body.classList.remove("overlay");
 });

$("#datepicker").datepicker();


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
      }, 1000);
});

$('.card').on('show.bs.collapse', function () {
      $(this).find("i").addClass("fa-chevron-circle-up").removeClass("fa-chevron-circle-down");
});
$('.card').on('hide.bs.collapse', function () {
      $(this).find("i").addClass("fa-chevron-circle-down").removeClass("fa-chevron-circle-up");
});

$("#datepicker").datepicker();

if (location.hash) {
      $('a[href=\'' + location.hash + '\']').tab('show');
}
var activeTab = localStorage.getItem('activeTab');
if (activeTab) {
      $('a[href="' + activeTab + '"]').tab('show');
}

$('body').on('click', 'a[data-toggle=\'tab\']', function (e) {
      e.preventDefault()
      var tab_name = this.getAttribute('href')
      if (history.pushState) {
            history.pushState(null, null, tab_name)
      }
      else {
            location.hash = tab_name
      }
      localStorage.setItem('activeTab', tab_name)

      $(this).tab('show');
      return false;
});
$(window).on('popstate', function () {
      var anchor = location.hash ||
            $('a[data-toggle=\'tab\']').first().attr('href');
      $('a[href=\'' + anchor + '\']').tab('show');
});
