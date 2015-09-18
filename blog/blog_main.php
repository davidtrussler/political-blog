<?php

session_start();

include ('../includes/doctype.php'); 

if (isset($_GET['postId'])) {
	$primaryClass = 'blogPost'; 
} else {
	$primaryClass = 'blogMain'; 
}

$title = 'blog';

include ('../constants/environment.php'); 
include ('../includes/commonHeader.php');
include ($DOC_ROOT.'/classes/weblog.php'); 
include ($DOC_ROOT.'/classes/dateFormatter.php'); 

$weblog = new Weblog($DOC_ROOT);
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
	include ($DOC_ROOT.'/blog/blog_intro.php'); 
}

include ($DOC_ROOT.'/blog/blog_primary.php'); 

if (isset($_GET['postId'])) {
	include ($DOC_ROOT.'/blog/blog_secondary.php'); 
}

include ($DOC_ROOT.'/includes/commonFooter.php');

?>

<!-- END blog_main -->