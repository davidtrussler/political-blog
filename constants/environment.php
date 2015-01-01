<?php

if ($SERVER_ROOT == 'http://davidtrussler.net/~futuragr/davidtrussler') {
	$localRoot = 'http://davidtrussler.net'; 
	$docRoot = $DOC_ROOT; 
} else {
	$localRoot = 'http://localhost/dtNet/'; 
	$docRoot = '/Library/WebServer/Documents/dtNet/'; 
}

/*
// local server
$DOC_ROOT = '/home/davidtrussler/public_html/dtNet'; 
$SERVER_ROOT = 'http://'.$_SERVER['SERVER_NAME'].'/~davidtrussler/dtNet';

// remote server
$DOC_ROOT = '/home/futuragr/public_html/davidtrussler'; 
$SERVER_ROOT = 'http://'.$_SERVER['SERVER_NAME'].'/~futuragr/davidtrussler';
*/

?>