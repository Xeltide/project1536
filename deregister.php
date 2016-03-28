<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the REQUEST values - parameters may come from GET or POST
	// $login = clean($_REQUEST['username_login']);
	$loginid = $_SESSION['SESS_MEMBER_ID'];
	$password = clean($_REQUEST['password_deregister']);
	
	//Input Validations
	if($loginid == '') {
		$errmsg_arr[] = 'Login ID missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: " . $_SERVER['HTTP_REFERER']);
		exit();
	}
	
	//Create query
	$qry="DELETE FROM members WHERE member_id='$loginid' AND passwd='".md5($password)."'";
	$result=mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_affected_rows() == 1) {
			//Unset the variables stored in session
			unset($_SESSION['SESS_MEMBER_ID']);
			unset($_SESSION['SESS_MEMBER_LOGIN']);
			unset($_SESSION['SESS_FIRST_NAME']);
			unset($_SESSION['SESS_LAST_NAME']);
			session_write_close();

			header("location: " . DEREGISTEREDURL);
			exit();
		}else {
			//Login failed
			$errmsg_arr[] = 'Incorrect password, cannot delete your account.';
			$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
			header("location: " . $_SERVER['HTTP_REFERER']);
			exit();
		}
	}else {
		die("Query failed");
	}
?>
