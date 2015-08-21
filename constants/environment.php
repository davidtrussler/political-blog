<?php

// echo 'SERVER_NAME: '.$_SERVER['SERVER_NAME']; 

if ($_SERVER['SERVER_NAME'] == 'davidtrussler.net') {
	$SERVER_ROOT = 'http://davidtrussler.net'; 
	$DOC_ROOT = '/home/futuragr/public_html/davidtrussler'; 
} else {
	$SERVER_ROOT = 'http://localhost/dtNet/'; 
	$DOC_ROOT = '/Library/WebServer/Documents/dtNet/'; 
}

$COMMENT_EXPIRE = 243; // number of days until comments are disabled

/*
// local server
$DOC_ROOT = '/home/davidtrussler/public_html/dtNet'; 
$SERVER_ROOT = 'http://'.$_SERVER['SERVER_NAME'].'/~davidtrussler/dtNet';

// remote server
$DOC_ROOT = '/home/futuragr/public_html/davidtrussler'; 
$SERVER_ROOT = 'http://'.$_SERVER['SERVER_NAME'].'/~futuragr/davidtrussler';
*/

?>