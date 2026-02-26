$( document ).ready(function() {

    $(window).on("load", function (e) {

                  $('#preloader').fadeOut('slow',function(){$(this).detach();});

              });


$("#nav-toggle").click(

function(e){
    e.preventDefault();

if($(this).hasClass("active")){
 $(".menu_cel").slideToggle()
}else{

    $(".menu_cel").slideToggle()
    }
    $(this).toggleClass("active")
}
)

/*
    $('a').click(function(e) {
e.preventDefault();
adonde = this.href;
        $().append();
$('#preloader').fadeIn('slow');
});

    function adondeF() {
window.location = adonde;
}
*/
/*
var owl = $('#slider_home');

owl.owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    dots:true,
    items:1,
    autoplay: true,
    //autoplayHoverPause: true,
    autoplayTimeout:6000,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
})


*/

});
