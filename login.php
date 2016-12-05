<?php
	session_start();
	include('connecting.php');
	
	
	/*$username = $_POST['username'];
	$password = $_POST['password'];
	
	if ($username=='admin' && $password=='admin'){
		$_SESSION['SESS_USERID'] ='admin';
		$_SESSION['SESS_NAME'] ='admin';
		header('Location: p2.html');
		exit();
	};*/
		$theuname = $thepword = $hideval= "";//$newsalt = $newdigest = $newtrack = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$theuname = test_input($_POST["username"]);
			$thepword = test_input($_POST["password"]);
			$hideval = test_input($_POST["hide"]);
			//$newsalt = mt_rand();
			$digest = md5($thepword);
			//$track = date("Y/m/d");
			//$thetime = date ("h:i:sa");
			//date_default_timezone_set("America/Jamaica");
			//$track = date("Y-m-d h:i:sa");
		
  
			$sql = "SELECT * FROM  user WHERE username = '$theuname' AND password_digest = '$digest";
		
			//$sql = "SELECT salt FROM user WHERE username = '$theuname'" ;
			$results= mysql_query($sql);
	
			//mysql_query("INSERT INTO Users(first_name, last_name, username, email, last_login, password_digest, salt) VALUES ('$fname', '$lname', '$uname', '$email', '$track', '$digest', '$thesalt')");			
			mysql_close($database);			
			//include_once 'confirm.php';
		
		echo($results);
		echo('testing');
		
		if ($results){
			if(mysql_num_rows($results) > 0){
				session_regenerate_id();
				$one = mysql_fetch_assoc($results);
				$_SESSION['SESS_DIGEST'] = $one['password_digest'];
				$_SESSION['SESS_UNAME'] = $one['username'];
				$_SESSION['SESS_USERID'] = $one['id'];
				session_write_close();
				include_once("Location: Homepage.php");
				exit();
			}else {
				echo("Username or password invalid <br>");
				header("Location: login.html");
				exit();
			}
		}else{
			include_once('login.html');
			die("Username or password invalid <br>PLease try again or GO BACK (<--)");
			
		}
		
	}
			
		function test_input($data) {
			if (empty($data)) {
				echo "missing data <br>";
				//include_once 'restart.php';
				//break;
				
			} else {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
		}
?>