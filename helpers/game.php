<?php

	require_once(dirname(__FILE__)."/../engine/global.php");
	
	
	class game {
		public function get_question() {
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
			$roll = Math.floor( Math.rand() * $upper_limit );
			
			// Get the prompt and the effect from the general_prompt table
			$statement = $dbh->prepare('SELECT COUNT(*) from general_prompts');
			$statement->execute();
			$fetch = $statement->fetch(PDO::MYSQL_FETCH_ASSOC);			
			$num_of_rows = $fetch["COUNT(*)"];
			$rand2 = Math.floor(Math.rand() * $num_of_rows);
			$statement2 = $dbh->prepare('SELECT prompt FROM general_prompts where general_pk = :rand2');
			$statement2->execute(array(':rand2' => $rand2));
			$fetch2 = $statement2->fetch(PDO::MYSQL_FETCH_ASSOC);
			$prompt = $fetch2['prompt'];
			$effect = $fetch2['effect'];
			return $prompt;
		}
	}