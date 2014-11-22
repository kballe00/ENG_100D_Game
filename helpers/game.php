<?php

	require_once(dirname(__FILE__)."/../engine/global.php");
	
	
	class game {
		public function get_question() {
			global $user;
			$username = $_SESSION['username'];
			$upper_limit = 1;
			if ($user.pull($username, 'wages') > 0) {
				$upper_limit += 1;
			}
			if ($user.pull($username, 'car_payment')) {
				$upper_limit += 1;
			}
			if ($user.pull($username, 'tuition')) {
				
			}
		}
	}