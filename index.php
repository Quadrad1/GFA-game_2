<?php

 $connection = mysqli_connect("localhost","root","","gfagame_db");
  if($connection == true){
    $tittle = "connect";
  }else{
    echo "Dont't Connected!!!!.</br></br></br>";
    $tittle = "Error";
    exit();
  }
$data = mysqli_query($connection,"SELECT * FROM `game_info` ");


  require_once('header.php');
 ?>
 <div class="slider">
   <img src="img/slider.png" alt="">
 </div>
 <div class="section"><!-- section -->
   <div class="section__title">
     Lorem ipsum dolor sit amet, consectetur adipisicing elit.
     Harum ullam, possimus beatae soluta. Doloremque aperiam, reiciendis aspernatur
   </div>
   <div class="section__description">
     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum corrupti tenetur, accusamus
     aliquid, inventore beatae harum pariatur provident aperiam quidem. Lorem ipsum dolor sit amet,
     consectetur adipisicing elit. Sequi perferendis sunt, culpa assumenda iure quas tempore neque
     eius unde sapiente.
   </div>
   <div class="section__buttons">
       <a href="https://play.google.com/store/apps/developer?id=GFAGAME&hl=en" class ="section__buttons__cont" target="_blank">
           Play Market
       </a>
       <a href="https://itunes.apple.com/kg/developer/oleg-sitdikov/id577803428?ign-mpt=uo%3D4" class ="section__buttons__cont" target="_blank">
         Appstore
       </a>
   </div>
   <div class="our-apps">
     <p>Our-apps</p>
   </div>
 </div><!--END section -->
 <div class="game-blocks"><!-- game-bloks -->

   <div class="game-block"><!-- game-blok -->
     <div class="game-block__cont-img">
       <a href="page.php" target="_blank">
         <img src="img/game-1.jpg" alt="" class = "game-block__img">
       </a>
     </div>
     <div class="game-block__links">
       <a href="#" target="_blank" class = "game-block__apple-link">

         <i class="fa fa-android" aria-hidden="true"></i>
       </a>
       <a href="#" target="_blank" class = "game-block__android-link">
         <i class="fa fa-apple" aria-hidden="true"></i>
       </a>
     </div>
     <div class="game-block__title">
       <a href="#" target="_blank">
         Tanks online
       </a>
     </div>
     <div class="game-block__description">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, unde
     </div>
   </div><!--END game-blok -->
   <?php
       while(($art = mysqli_fetch_assoc($data))){

  ?>
  <div class="game-block"><!-- game-blok -->
    <div class="game-block__cont-img">
      <a href="page.php" target="_blank">
        <?php echo('<img src="' . $art['logo']. '" alt="" class = "game-block__img">') ?>
      </a>
    </div>
    <div class="game-block__links">
      <a href="#" target="_blank" class = "game-block__apple-link">

        <i class="fa fa-android" aria-hidden="true"></i>
      </a>
      <a href="#" target="_blank" class = "game-block__android-link">
        <i class="fa fa-apple" aria-hidden="true"></i>
      </a>
    </div>
    <div class="game-block__title">
      <a href="#" target="_blank">
        Tanks online
      </a>
    </div>
    <div class="game-block__description">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, unde
    </div>
  </div><!--END game-blok -->


    <?php
         }
         ?>
 </div><!--END game-bloks -->



 <?php
  require_once('footer.php');
  ?>
