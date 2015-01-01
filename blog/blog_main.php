<?php

session_start();

if (isset($_GET['postId'])) {
	$primaryClass = 'blogPost'; 
} else {
	$primaryClass = 'blogMain'; 
}

$title = 'blog';

include ('../constants/environment.php'); 
include ('../includes/commonHeader.php');
include ($docRoot.'classes/weblog.php'); 
include ($docRoot.'classes/dateFormatter.php'); 

$weblog = new Weblog($docRoot);
$dateFormatter = new DateFormatter();

// TODO - get blog posts as object not 2 db requests
// and get post from titleid not postid
if (isset($_GET['tagNameId'])) {
	$postIdArray = $weblog->getPostIds($_GET['tagNameId'], ''); 
} elseif (isset($_GET['month'])) {
	$postIdArray = $weblog->getPostIds('', $_GET['month']); 
} else {
	$posts = $weblog->getPosts(); 
}

echo '<!-- BEGIN blog_main -->'; 

if (!isset($_GET['postId'])) {
	include ($docRoot.'/blog/blog_intro.php'); 
}

include ($docRoot.'/blog/blog_primary.php'); 

if (isset($_GET['postId'])) {
	include ($docRoot.'/blog/blog_secondary.php'); 
}

include ($docRoot.'/includes/commonFooter.php');

?>

<!-- END blog_main -->