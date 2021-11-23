<?php
//for header redirection
ob_start();

//start session
session_start();

//get the name of the current page
$current_file = $_SERVER['SCRIPT_NAME'];

//funtion to check for login
function check_login(){
	//check if login session exit
	if (!isset($_SESSION['user_id']))
	{
		//redirect to login page
    	header('Location: ../login/login.php');
	}
}

//function to check for permission
function check_permission(){
	//get session role
	if (isset($_SESSION['user_role'])) {
		//assign session to an array
		$uperm = $_SESSION['user_role'];
		if ($uperm != 1) {
			//redirect user
    		header('Location: ../login/login.php');
		}
	}
}

//function to return client's ip address
//code obtained from
//https://www.hashbangcode.com/article/get-ip-address-visitor-through-php

function getRealIpAddr(){
     if ( !empty($_SERVER['HTTP_CLIENT_IP']) ) {
      // Check IP from internet.
      $ip = $_SERVER['HTTP_CLIENT_IP'];
     } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
      // Check IP is passed from proxy.
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
     } else {
      // Get IP address from remote address.
      $ip = $_SERVER['REMOTE_ADDR'];
     }
     return $ip;
}



?>
