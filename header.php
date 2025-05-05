<?php
//bcopperw
session_start();

//Error Reporting
error_reporting(E_ALL);
ini_set('display_errors',"1");

//Include Files
require_once "connect.php";
require_once "functions.php";

//Getting the current file name
$currentFile = basename ($_SERVER['SCRIPT_FILENAME']);

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>bcopperw</title>
		<link rel="stylesheet" href="styles.css">
		<script src="/csci303/tinymce/tinymce/js/tinymce/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
	</head>
	<body>
		<header>
			<nav>
				<?php
					echo ($currentFile == "index.php") ? "Home" : "<a href ='index.php'>Home</a>"; 
					
					echo ($currentFile == "register.php") ? "Register" : "<a href ='register.php'>Register</a>";
					
                    if (isset($_SESSION['userID'])) {
					echo ($currentFile == "logout.php") ? "Logout" : "<a href ='logout.php'>Logout</a>";
					  echo ($currentFile == "pagemanage.php") ? "Manage Pages" : "<a href = 'pagemanage.php'>Manage Pages</a>";
                 } else {
                      echo ($currentFile == "login.php") ? "Login" : "<a href ='login.php'>Login</a>";
                 }
					
    

				?>
			<h1>Bryanna Copperwheat</h1>
			</nav>
		</header>
			<main>
			<br>