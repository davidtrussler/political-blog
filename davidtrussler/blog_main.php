<?php

include ('includes/weblog.php'); 
include ('includes/dateFormatter.php'); 

$weblog = new Weblog();
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

if (isset($_GET['postId']) && $_GET['postId'] != '') {
	$postId = $_GET['postId']; 
	$idArray = explode('-', $postId); 
	$postId = array_pop($idArray); 
} else {
	$postIdArray = $weblog->getPostIds('', ''); 
	$postId = $postIdArray[0];  
}

$post = $weblog->getPost($postId);

if (isset($post['title'])) {
	$postTitle = htmlspecialchars_decode($post['title']); 
} else {
	$postTitle = 'Untitled'; 
}

if (isset($post['timestamp'])) {
	$date = $weblog->formatDate($post['timestamp']); 
} else {
	$date = 'never'; 
}

if (isset($post['body'])) {
	$body = ''; 

	$bodyXml = new DOMDocument();
	$bodyXml->loadXML(htmlspecialchars_decode($post['body']));

	$paras = $bodyXml->getElementsByTagName('para');

	foreach ($paras as $para) {
		$body .= '<p>'.$para->nodeValue.'</p>'; 
	}
} else {
	$body = 'this post has no content'; 
}

$tags = $post['tags']; 

/* 
 * removed comments until made safe --
 * 
$emptyFieldArray = array(); 

$commentAuthor = ''; 
$commentEmail = ''; 
$commentWebsite = ''; 
$commentBody = ''; 
$commentTitle = ''; 
$commentNotify = ''; 
$validatedEmail = ''; 
$sectionClass = ''; 
$validComment = 'false'; 

// comment is being added
if (isset($_POST['action']) && $_POST['action'] == 'saveComment') {
	if ($_POST['name'] != '') {
		$commentAuthor = $_POST['name']; 
	} else {
		array_push($emptyFieldArray, 'name'); 
	}

	if ($_POST['email'] != '') {
		$validatedEmail = false; 
		$commentEmail = $_POST['email']; 
		$validatedEmail = $weblog->validateEmail($commentEmail); 
	} else {
		array_push($emptyFieldArray, 'email'); 
	}

	if (isset($_POST['website'])) {
		$commentWebsite = $_POST['website']; 
	}

	if ($_POST['comment'] != '') {
		$commentBody = $_POST['comment']; 
	} else {
		array_push($emptyFieldArray, 'comment'); 
	}

	if (isset($_POST['title'])) {
		$commentTitle = $_POST['title']; 
	}

	if (isset($_POST['captcha_input'])) {
		$captcha_input = $_POST['captcha_input']; 
	}

	if (isset($_POST['captcha_validate'])) {
		$captcha_validate = $_POST['captcha_validate']; 
	}

	if ($captcha_input == $captcha_validate) {
		$validComment = 'true'; 
	}

	if (count($emptyFieldArray) == 0 && $validatedEmail == true && $validComment == 'true') {
		if (isset($_POST['notify'])) {
			$commentNotify = 'true'; 
		} else {
			$commentNotify = 'false'; 
		}

		$saveComment = $weblog->saveComment($commentAuthor, $commentEmail, $commentWebsite, $postId, $commentBody, $commentTitle, $commentNotify); 

		$commentAuthor = ''; 
		$commentEmail = ''; 
		$commentWebsite = ''; 
		$commentBody = ''; 
		$commentTitle = ''; 
	} else {
		if (count($emptyFieldArray) > 0) {
			if (count($emptyFieldArray) > 1) {
				$saveComment = 'Please complete the missing fields below';
			} else {
				$saveComment = 'Please complete the missing field below';
			}
		} elseif ($validatedEmail === false) {
			$saveComment = 'Please enter a valid email address below'; 
		} else {
			$saveComment = 'Please answer the question'; 
		}
	}
}
*/

$pageTitle = strip_tags($postTitle); 

if (isset($_GET['postId'])) {
	$title = 'blog | '.$pageTitle;
	$primaryClass = 'blogPost'; 
} else {
	$title = 'blog';
	$primaryClass = 'blogMain'; 
}

include ('includes/commonHeader.php');

if (!isset($_GET['postId'])) {
	include ('includes/blog_intro.php'); 
}

include ('includes/blog_primary.php'); 

if (isset($_GET['postId'])) {
	include ('includes/blog_secondary.php'); 
}

include ('includes/commonFooter.php');

?>