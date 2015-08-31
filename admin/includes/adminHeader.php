<?php

include ('../constants/environment.php'); 

?>

<!DOCTYPE html>

<html>
	<head>
		<title>david trussler | admin | <?php echo $title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="<?php echo $SERVER_ROOT; ?>css/dtPage.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $SERVER_ROOT; ?>admin/admin.css"/>
		<script type="text/javascript" src="<?php echo $SERVER_ROOT; ?>js/jquery-1.7.1.min.js"></script>
		<!-- <script type="text/javascript" src="<?php echo $SERVER_ROOT; ?>/admin/includes/textEditor.js"></script> -->
		<script type="text/javascript" src="<?php echo $SERVER_ROOT; ?>admin/js/admin.js"></script>
	</head>

	<body class="admin">
		<div id="wrap">
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