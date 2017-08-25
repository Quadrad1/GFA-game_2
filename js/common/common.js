// var check_menu = 0;
// $(".menu__button").click(function(event){
//   if(check_menu == 0){
//     // $(".header__menu").css({'display':'flex'})
//     $(".header__menu").css({'display':'flex'})
//     check_menu = 1;
//   }else  if(check_menu == 1){
//       $(".header__menu").css({'display':'none'})
//       check_menu = 0;
//     }
// });

$(".menu__button").click(function(){
  $(".header__menu").slideToggle(500)
});
// $(".menu__button").on('click',function(){
//   // $(".header__menu").slideToggle(300)
// });
$(".game-slider").slick({
    dots: false,
	  speed: 200,
	  cssEase: 'linear',
		autoplay: true,
	  autoplaySpeed: 3000,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    //   variableWidth: true

});
// $('.slider-nav').slick({
//   slidesToShow: 3,
//   slidesToScroll: 1,
//   asNavFor: '.game-slider',
//   dots: false,
//   // centerMode: true,
//   focusOnSelect: true
// });
