<?php

$self = $_SERVER['PHP_SELF']; 
$selfArray = explode('/', $self); 
$page = array_pop($selfArray); 
$root = join('/', $selfArray).'/'; 
$pageArray = explode('.', $page); 

/*
if ($SERVER_ROOT == 'http://davidtrussler.net/~futuragr/davidtrussler') {
	$localRoot = 'http://davidtrussler.net'; 
	$docRoot = $DOC_ROOT; 
} else {
	$localRoot = 'http://localhost/dtNet/'; 
	$docRoot = '/Library/WebServer/Documents/dtNet/'; 
}
*/

if ($_SERVER['SERVER_NAME'] == 'davidtrussler.net') {
	$SERVER_ROOT = 'http://davidtrussler.net'; 
	$DOC_ROOT = '/home/futuragr/public_html/davidtrussler'; 
} else {
	$SERVER_ROOT = 'http://localhost/dtNet/'; 
	$DOC_ROOT = '/Library/WebServer/Documents/dtNet/'; 
}

// echo 'self = '.$self; 
// echo 'SERVER_ROOT = '.$SERVER_ROOT; 

$link_array = array (
	'home' => 'home', 
	'web' => 'web', 
	'sound' => 'sound', 
	'blog' => 'blog' /* ,
	'contact' => 'contact' */ 
); 

?>

<!DOCTYPE html>

<!-- BEGIN commonHeader -->
<html>
	<head>
		<title>david trussler | <?php echo $title; ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="<?php echo $SERVER_ROOT; ?>js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="<?php echo $SERVER_ROOT; ?>js/dtPage.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo $SERVER_ROOT; ?>css/dtPage.css"/>
		<link rel="icon" type="image/jpg" href="<?php echo $root; ?>graphics/favicon.png">

<?php

if ($pageArray[0] == 'sound') {
	
?>

		<link rel="stylesheet" type="text/css" href="<?php echo $root; ?>/soundPage.css"/>

<?php 
	
}

include ($DOC_ROOT.'/includes/googleAnalytics.php'); 

?>

	</head>

	<body class="<?php echo $pageArray[0]; ?>">
		<div id="wrap">
			<div id="header" class="clear">
				<h1>david<br />trussler</h1>

				<ul class="nav">

<?php 

	foreach($link_array as $url => $title) {
		$url_array = explode('?', $url); 

		if (stripos($self, $url_array[0]) != false) {
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