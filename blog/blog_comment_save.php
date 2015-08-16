<?php

/*
 * save a comment in the database
 * and redirect to blog page for the post
**/

@ session_start();

include ('../constants/environment.php'); 
include ($DOC_ROOT.'/classes/sessions.php'); 
include ($DOC_ROOT.'/classes/weblog.php'); 
include ('blog_blockedIPs.php'); 

$postId = $_GET['postId']; 
$sessions = new Sessions();
$weblog = new Weblog($DOC_ROOT);
$emptyFieldArray = array(); 

$sessions -> unsetAll(); 

$commentAuthor = ''; 
$commentEmail = ''; 
$commentWebsite = ''; 
$commentBody = ''; 
// $commentTitle = ''; 
$commentNotify = ''; 
// $validatedEmail = ''; 
// $sectionClass = ''; 
// $validCaptcha = 'invalid'; 

// comment is being added
if (isset($_POST['action']) && $_POST['action'] == 'saveComment') {
	// get user IP and check against blocked IPs
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}

	if (in_array($ip, $blockedIps)) {
		// ip address is blocked
		$commentSaved = 'no'; 
	} else {
		// ip address is not blocked
		if ($_POST['name'] != '') {
			$commentAuthor = $_POST['name']; 
		} else {
			array_push($emptyFieldArray, 'name'); 
		}

		if ($_POST['email'] != '') {
			// $validatedEmail = false; 
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

		if ($captcha_validate != '' && $captcha_input == $captcha_validate) {
			$validCaptcha = 'valid'; 
		} else {
			$validCaptcha = 'invalid'; 
		}

		if (count($emptyFieldArray) == 0 && $validatedEmail == true && $validCaptcha == 'valid') {
			// form is valid
			if (isset($_POST['notify'])) {
				$commentNotify = 'true'; 
			} else {
				$commentNotify = 'false'; 
			}

			$saveComment = $weblog->saveComment($commentAuthor, $commentEmail, $commentWebsite, $postId, $commentBody, $commentTitle, $commentNotify, $ip); 

			$commentAuthor = ''; 
			$commentEmail = ''; 
			$commentWebsite = ''; 
			$commentBody = ''; 
			// $commentTitle = ''; 
			
			$commentSaved = 'yes'; 

			// echo $saveComment; 
		} else {
			// form is not valid - show errors
			$saveComment = array(); 
			
			if (count($emptyFieldArray) > 0) {
				$_SESSION['emptyFieldArray'] = $emptyFieldArray; 

	 			if (count($emptyFieldArray) > 1) {
					array_push($saveComment, 'Please complete the missing fields below');
				} else {
					array_push($saveComment, 'Please complete the missing field below');
				}
			} 

			if (isset($validatedEmail) && $validatedEmail == 'invalid') {
				$_SESSION['validatedEmail'] = $validatedEmail; 
				array_push($saveComment, 'Please enter a valid email address below');
			} 

			if (isset($validCaptcha) && $validCaptcha == 'invalid') {
				$_SESSION['validCaptcha'] = $validCaptcha; 
				array_push($saveComment, 'Please answer the question at the bottom of the form');
			}

			$_SESSION['commentAuthor'] = $commentAuthor; 
			$_SESSION['commentEmail'] = $commentEmail; 
			$_SESSION['commentWebsite'] = $commentWebsite; 
			$_SESSION['commentBody'] = $commentBody; 
			$_SESSION['saveComment'] = $saveComment; 
			
			$commentSaved = 'no'; 
		}
	}
}

header('location:'.$SERVER_ROOT.'/blog/'.$postId.'/saved='.$commentSaved.'&from=saved#commentAdd');

?>