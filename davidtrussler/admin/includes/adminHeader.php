<?php

/*
session_start(); 

$notSetArray = array(); 
$email = '';
$password = '';
$login = ''; 

if (isset($_GET['action']) && $_GET['action'] == 'logout') {
	unset($_SESSION['authUser']); 
}

if (isset($_POST['submit']) && $_POST['submit'] == 'active') {
	if (isset($_POST['email_login']) && $_POST['email_login'] != '') {
		$email = $_POST['email_login']; 
	} else {
		array_push($notSetArray, 'email'); 
	}

	if (isset($_POST['password_login']) && $_POST['password_login'] != '') {
		$password = $_POST['password_login']; 
	} else {
		array_push($notSetArray, 'password'); 
	}

	if (count($notSetArray) == 0) {
		$login = 'false'; 

		include('includes/weblogAdmin.php'); 

		$weblogAdmin = new WeblogAdmin('');

		$login = $weblogAdmin->checkAuthUser($email, $password); 

		if ($login == 'true') {
			$_SESSION['authUser'] = $email; 
		}
	}
}
*/

?>

<!DOCTYPE html>

<html>
	<head>
		<title>david trussler | admin | <?php echo $title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../dtPage.css"/>
		<link rel="stylesheet" type="text/css" href="admin.css"/>
		<script src="../js/jquery-1.7.1.min.js" type="text/javascript"></script>
		<script src="includes/textEditor.js" type="text/javascript"></script>
		<script src="includes/admin.js" type="text/javascript"></script>
	</head>

	<body class="admin">
		<div id="wrap">

<?php

/*
if (isset($_SESSION['authUser'])) {
		echo '<p>Logged in as: '.$_SESSION['authUser'].'&nbsp;|&nbsp;<a href="index.php?action=logout">Log out</a></p>'; 
}
*/

?>

			<div id="header">
				<h1>david trussler</h1>
				<h2>admin area</h2>
				<!-- <h3>blog</h3> -->

				<ul class="links">
					<li><a href="index.php">home</a></li>
					<li><a href="blog.php">blog</a></li>
				</ul>
			</div>

			<div id="content">
