<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<style>
			tbody { 
				height:80em;  
				overflow: scroll;
			}
		</style>
	</head>
	<body>
		<?php
		date_default_timezone_set('Europe/Warsaw');
		error_reporting(~E_ALL);

		$time_start = microtime(true);
		list($usec, $sec) = explode(' ', $time_start);
		$usec = str_replace("0.", ".", $usec);
		
		$password = 'password123';
		
		echo md5($password);
		
		echo '<br/>';
		
		$time_md5 = (microtime(true) - $time_start);
		
		echo 'time completed: '.$time_md5;
		
		echo '<br/>';
		
		$cost = 12;
		
		echo 'Cost: '.$cost;
		
		echo '<br/>';
		
		echo password_hash($password,PASSWORD_BCRYPT,array('cost' => $cost));
		
		echo '<br/>';
		
		$time_bcrypt = (microtime(true) - $time_start);
		
		echo 'time completed: '.$time_bcrypt;
		
		echo '<br/>';
		
		echo 'Speed coefficient: '.($time_bcrypt/$time_md5);
		?>
	</body>
</html>