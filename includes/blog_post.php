<?php

if (isset($_GET['postId'])) {
	$postId = $_GET['postId']; 
} else {
	$postIdArray = $weblog->getPostIds('', ''); 
	$postId = $postIdArray[0];  
}

echo 'postId = '.$postId; 

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

include('includes/blog_primary.php'); 

?>

<div id="secondary">
	<h5>Other posts</h5>

<?php

for ($i = 0; $i < count($postIdArray); $i++) {
	if ($postId != $postIdArray[$i]) {
		$thisPostId = $postIdArray[$i]; 
		$post = $weblog->getPost($thisPostId);
		$title = $post['title']; 

		echo '<p><a href="blog?postId='.$thisPostId.'">'.$title.'</a></p>'; 
	}
}

?>

</div> <!-- end secondary -->