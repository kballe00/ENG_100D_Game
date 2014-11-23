<main>
	<?php
		global $game;
    
    $q = $game->get_question();
   
    $string = $q['effect'];
    $pattern = '/([a-x]+)([+|-]=)([0-9]+)/';

    $_SESSION['amt'] = intval( preg_replace( $pattern, '$3', $string ) );
    $_SESSION['var'] = preg_replace( $pattern, '$1', $string );
    
    if( substr( preg_replace( $pattern, '$2', $string ), 0, 1 ) == '-' ){
      $_SESSION['amt'] = - $_SESSION['amt'];
    }
    
  ?>
  <div id="prompt">
    <div class="prompt">
      <?php
        echo $q['prompt'];
      ?>
    </div>
    <div class="options">
      <?php if( $_SESSION['amt'] < 0 ){ ?>
        <a href="" class="positive">SPEND</a>
        <a href="" class="negative">REMIND ME LATER</a>
      <?php } else { ?>
        <a href="" class="positive">ACCEPT</a>
      <?php } ?>
    </div>
  </div>
</main>