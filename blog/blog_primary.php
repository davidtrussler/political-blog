<!-- BEGIN blog_primary -->
<div id="primary" class="<?php echo $primaryClass; ?>">

<?php

if (isset($_GET['postId']) && $_GET['postId'] != '') {
	$postId = $_GET['postId']; 
	$idArray = explode('-', $postId); 
	$postId = array_pop($idArray); 
		
	// echo 'postId = '.$_GET['postId']; 
	
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
	$pageTitle = strip_tags($postTitle); 
	
	// display single post
	include ('blog_post.php'); 

	// display comments 
	include ('blog_comments.php'); 
} else {
	foreach ($posts as $post) {
		$postId = $post[0]; 
		$titleId = $post[1]; 
		$date = $post[2]; 
			$date = $dateFormatter->formatDate($date); 
		$title = htmlspecialchars_decode($post[3]); 
		$body = simplexml_load_string(htmlspecialchars_decode($post[4])); 
			$body_trunc = $body->para[0]; 

?>

	<p class="date"><?php echo $date; ?></p>
	<h3><?php echo $title; ?></h3>
	<p>
		<?php echo $body_trunc; ?>
		<span><a href="<?php echo $SERVER_ROOT.'blog/'.$titleId.'/'; ?>">Read more &#8230;</a></span>
	</p>

<?php

	}
}

?>

</div>
<!-- END blog_primary -->