<?php

  

?>
<section id="sidebar">
  <header>
    <img src="https://scontent-a-ord.xx.fbcdn.net/hphotos-xpa1/v/t1.0-9/10369881_10204685316198043_7276222986964151542_n.jpg?oh=067c9112ffc5c9496dde48dc6762ff8c&oe=5512D38C" alt>
    <h1>
      <?php
      
        // echo $user->get("name");
        echo "Purag Moumdjian";
      
      ?>
    </h1>
  </header>
  <nav>
    <a href="home">
      DASHBOARD
    </a><a href="profile">
      PROFILE
    </a><a href="report">
      MY FINANCES
    </a><a href="game">
      PLAY
    </a>
  </nav>
  <aside>
    <header>
      STATS
      <a href="profile">SEE MORE</a>
    </header>
    <span class="stat bank">BANK</span>
      <span class="val">
        <?php
        
          echo "$" . $user->pull( $_SESSION['username'], 'bank' );
        
        ?>
      </span>
    <span class="stat">JOB</span>
      <span class="val">
        <?php
        
          if( $user->pull( $_SESSION['username'], 'wages' ) ){
            echo "$" . $user->pull( $_SESSION['username'], 'wages' );
          } else {
            echo "None";
          }
        
        ?>
      </span>
    <span class="stat">TUITION</span>
      <span class="val">
        <?php
        
          if( $user->pull( $_SESSION['username'], 'tuition' ) ){
            echo "$" . $user->pull( $_SESSION['username'], 'tuition' );
          } else {
            echo "None";
          }
        
        ?>
      </span>
    <span class="stat">DAYS</span>
      <span class="val">
        <?php
        
          echo 7 * $user->pull( $_SESSION['username'], 'round' );
        
        ?></span>
  </aside>
</section>