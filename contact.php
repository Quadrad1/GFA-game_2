<?php
  require_once("header.php");
 ?>
 <div class="slider">
   <img src="img/slider.png" alt="">
 </div>
 <div class="contact__block">

     <form action="mail.php" class="contact">
       <input type="name" placeholder="Ваше имя">
       <input type="email" placeholder="Ваш email">
       <textarea name="main" id="" cols="30" rows="10"></textarea>
       <button type="submit" name="button">Отправить</button>
     </form>

   <div class="description">
     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
     Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
     nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
     officia deserunt mollit anim id est laborum.
   </div>

 </div>
 <?php
   require_once("footer.php");
  ?>
