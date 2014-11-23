<?php

	require_once(dirname(__FILE__)."/../engine/global.php");
	
	
	class game {
		public function get_question( ) {
			global $user;
			global $dbh;
			$username = $_SESSION['username'];
			$upper_limit = 0;
			if ($user->pull($username, 'wages') > 0) {
				$upper_limit += 1;
			}
			if ($user->pull($username, 'car_payment') > 0) {
				$upper_limit += 1;
			}
			if ($user->pull($username, 'tuition') > 0) {
				$upper_limit += 1;
			}
			$roll = rand( 0, $upper_limit );
			
			// Get the prompt and the effect from the general_prompt table
			/* $statement = $dbh->prepare('SELECT * from general_prompts');
			$statement->execute();
			$num_of_rows = $statement->rowCount();
			$rand2 = floor(rand() * $num_of_rows);
			$statement2 = $dbh->prepare('SELECT prompts FROM general_prompts where general_pk = $rand2');
			$statement2->execute();
			$fetch2 = $statement2->fetch(PDO::FETCH_ASSOC); */
      
      $statement = $dbh->prepare('SELECT * FROM general_prompts ORDER BY RAND() LIMIT 1');
      $statement->execute();
      $fetch = $statement->fetch(PDO::FETCH_ASSOC);

      $prompt = $fetch['prompts'];
      $effect = $fetch['effects'];
      
      return array(
        'prompt' => $prompt,
        'effect' => $effect
      );
		}
	}