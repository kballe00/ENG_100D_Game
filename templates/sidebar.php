<?php

  

?>
<section id="sidebar">
  <header>
    <img src="avatar.png" alt>
    <h1>
      <?php
      
        // echo $user->get("name");
        echo "John Smith";
      
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
    <span class="stat">BANK</span>
      <span class="val">
        <?php
        
          echo "$" . $user->pull( $_SESSION['username'], 'bank' );
        
        ?>
      </span>
    <span class="stat">JOB</span>
      <span class="val">None</span>
    <span class="stat">UNIVERSITY</span>
      <span class="val">None</span>
    <span class="stat">DAYS</span>
      <span class="val">230</span>
  </aside>
</section>