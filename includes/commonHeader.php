<?php

$self = $_SERVER['PHP_SELF']; 
$selfArray = explode('/', $self); 
$page = array_pop($selfArray); 
$root = join('/', $selfArray).'/'; 
$pageArray = explode('.', $page); 

// set the timezone for date-based calculations
date_default_timezone_set('Europe/London'); 

$link_array = array (
	'home' => 'home', 
	'blog' => 'blog'
); 

?>

<!DOCTYPE html>

<!-- BEGIN commonHeader -->
<html>
	<head>
		<title>david trussler | <?php echo $title; ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- 
		<script type="text/javascript" src="<?php echo $SERVER_ROOT; ?>js/jquery-1.7.1.min.js"></script> 
		<script type="text/javascript" src="<?php echo $SERVER_ROOT; ?>js/dtPage.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo $SERVER_ROOT; ?>css/dtPage.css"/>
		-->
		<link rel="icon" type="image/jpg" href="<?php echo $root; ?>graphics/favicon.png">

<?php

include ($DOC_ROOT.'/includes/googleAnalytics.php'); 

?>

	</head>

	<body class="<?php echo $pageArray[0]; ?>">
		<div id="wrap">
			<div id="header" class="clear">
				<h1>david<br />trussler</h1>

				<ul class="nav">

<?php 

	// identify if the link is to the current page
	foreach($link_array as $url => $title) {
		$dest = explode('?', $url)[0]; 
		$thisPage = array_pop(explode('/', $self));

		if ($dest == 'home') {
			$dest = 'index'; 
		}

		if (stripos($thisPage, $dest) !== false) {
			echo '<li class="live">'.$title.'</li>'; 
		} else {
			echo '<li><a href="'.$SERVER_ROOT.$url.'">'.$title.'</a></li>'; 
		}
	}

?>

				</ul>
			</div>

			<div class="end"></div>

			<div id="content" class="clear">
<!-- END commonHeader -->