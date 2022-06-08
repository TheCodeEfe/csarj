
$(".menu--btn").click(function(){
    $(".header-mobile").toggleClass("active");
    $(this).toggleClass("menu--btnimg");
    $('body').toggleClass('overflow-none');
    $('.header').toggleClass('res-header');
});
$(document).ready(function () {
      $(document).on('click', '.questions-app', function () {
        var open = $(this).parent().hasClass('open');
        if (open) {
          $(this).siblings('.questions-content').slideUp(500, function () {
            $(this).parent().removeClass('open');
          });
        } else {
          $(this).siblings('.questions-content').slideDown(500, function () {
            $(this).parent().addClass('open');
          });
        }
      });
});
$(".head").click(function () {
    if(window.matchMedia("(max-width: 767px)").matches){
        $(this).parent("div").toggleClass("active");
        $(this).parent("div").find("ul").toggleClass("active").slideToggle(500);
    } else{
}
});
$(".menu--nav > ul > li > a").click(function(){
   $(this).parent("li").toggleClass("active");
    $(this).next("ul").toggleClass("active").slideToggle(500);
});

/*anımatıon*/
$(window).on('scroll',  function(){
    if(window.matchMedia("(max-width: 767px)").matches){}
    else{
        var top = -164 + $(window).scrollTop() / 7;
 $(".site-about-right img").css('transform', 'translateY( ' + top + 'px)');
    }
});
$(document).on("focusout",".form_contact__box input",function(){
    let indexLabel = $(".form_contact__box input").index(this);
    let thisVal = $(this).val();
    if( thisVal.length > 0 ){
        $(".form_contact__box label").eq(indexLabel).css({
            fontWeight:" 400",
            fontSize:" 12px",
            bottom:" 40px"
        })
    }else{
        $(".form_contact__box label").eq(indexLabel).removeAttr("style")
    }
});



$("#listitem").swiperight(function() {
  $.mobile.changePage("#page1");
});















































