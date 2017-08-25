var check_menu = 0;
$(".menu__button").click(function(event){
  if(check_menu == 0){
    // $(".header__menu").css({'display':'flex'})
    $(".header__menu").css({'display':'flex'})
    check_menu = 1;
  }else  if(check_menu == 1){
      $(".header__menu").css({'display':'none'})
      check_menu = 0;
    }
});
