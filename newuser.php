<?php
		session_start();
		include ('connecting.php');
		
		// defining the variables and set they were set to empty values
		$fname = $lname = $uname = $pword = $thesalt = $digest = $track = "";
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$fname = test_input($_POST["firstname"]);
			$lname = test_input($_POST["lastname"]);
			$uname = test_input($_POST["username"]);
			//$email = test_input($_POST["email"]);
			
			$pword = ($_POST["password"]);
			$thesalt = mt_rand();
			$digest = md5($pword.$thesalt);
			
			date_default_timezone_set("America/Jamaica");
			$track = date("Y-m-d h:i:sa");
		
			
			mysql_query("INSERT INTO user(firstname, lastname, username, last_login, password_digest, salt) VALUES ('$fname', '$lname', '$uname', '$track', '$digest', '$thesalt')");
			
			//write a mysql_query to get id created for current user by searching in database where  $uname exist  
			
			//last_login, value -> $track
			mysql_close($database);
			
			include_once 'confirm.php';
			
		}
		function test_input($data) {
			if (empty($data)) {
				echo "missing data <br>";
				include_once 'restart.php';
				//break;
				
			} else {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
		}
?> 
