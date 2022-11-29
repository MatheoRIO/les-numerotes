<nav>
  <section>
    <?php
    if ($nav == 1){
      $selected = 'selected';
      $selected2 = ''; $selected3 = ''; $selected4 = '';
    }elseif($nav == 2){
      $selected2 = 'selected';
      $selected = ''; $selected3 = ''; $selected4 = '';
    }elseif($nav == 3){
      $selected3 = 'selected';
      $selected = ''; $selected2 = ''; $selected4 = '';
    }elseif($nav == 4){
      $selected = ''; $selected2 = ''; $selected3 = ''; $selected4 = '';
    }else{
      $selected = ''; $selected2 = ''; $selected3 = ''; $selected4 = '';
    }
    ?>
    <article>
      <div class="nav_button <?php echo $selected ?>">
        <a href="who.php" draggable="false">Qui sont-ils ?</a>
      </div>
      <div class="nav_button <?php echo $selected2 ?>">
        <a href="summon.php" draggable="false">Les Summons</a>
      </div>
    </article>
    <div class="logo">
      <a href="index.php" draggable="false">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentcolor" d="M0 241.1C0 161 65 96 145.1 96c38.5 0 75.4 15.3 102.6 42.5L320 210.7l72.2-72.2C419.5 111.3 456.4 96 494.9 96C575 96 640 161 640 241.1v29.7C640 351 575 416 494.9 416c-38.5 0-75.4-15.3-102.6-42.5L320 301.3l-72.2 72.2C220.5 400.7 183.6 416 145.1 416C65 416 0 351 0 270.9V241.1zM274.7 256l-72.2-72.2c-15.2-15.2-35.9-23.8-57.4-23.8C100.3 160 64 196.3 64 241.1v29.7c0 44.8 36.3 81.1 81.1 81.1c21.5 0 42.2-8.5 57.4-23.8L274.7 256zm90.5 0l72.2 72.2c15.2 15.2 35.9 23.8 57.4 23.8c44.8 0 81.1-36.3 81.1-81.1V241.1c0-44.8-36.3-81.1-81.1-81.1c-21.5 0-42.2 8.5-57.4 23.8L365.3 256z"/></svg>
        <span>Les Numérotés</span>
      </a>
    </div>
    <article>
      <div class="nav_button <?php echo $selected3 ?>">
        <a href="meme.php" draggable="false">Les Memes</a>
      </div>
      <div class="nav_button <?php echo $selected4 ?>">
        <a href="join.php" draggable="false">Envie de les rejoindre ?</a>
      </div>
    </article>
  </section>
  <a class="logout" href="include/logout.php" draggable="false">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentcolor" d="M160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96C43 32 0 75 0 128V384c0 53 43 96 96 96h64c17.7 0 32-14.3 32-32s-14.3-32-32-32H96c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32h64zM504.5 273.4c4.8-4.5 7.5-10.8 7.5-17.4s-2.7-12.9-7.5-17.4l-144-136c-7-6.6-17.2-8.4-26-4.6s-14.5 12.5-14.5 22v72H192c-17.7 0-32 14.3-32 32l0 64c0 17.7 14.3 32 32 32H320v72c0 9.6 5.7 18.2 14.5 22s19 2 26-4.6l144-136z"/></svg>
  </a>
</nav>