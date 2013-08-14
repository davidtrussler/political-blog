<div id="secondary">
	<h5>Recent posts</h5>

<?php

/* 
 * this is a mess!
 * get all posts as object again 
 * take out multiple db queries!
 */
for ($i = 0; $i < count($posts); $i++) {
	// $thisPostId = $postIdArray[$i]; 

	// $post = $weblog->getPost($thisPostId);
	$post = $posts[$i]; 

	$thisPostId = $post[0]; 
	$titleId = $post[1]; 
	$date = $post[2]; 
		$date = $dateFormatter->formatDate($date); 
	// $title = $post[3]; 
	$title = htmlspecialchars_decode($post[3], ENT_QUOTES);

?>

	<p class="date"><?php echo $date ?></p>

<?php

	// if ($postId == $postIdArray[$i]) {
	if ($postId == $thisPostId) {

?>

	<p><?php echo $title ?></p>

<?php

	} else {

?>

	<p>
		<a href="<?php echo $SERVER_ROOT.'/blog/'.$titleId.'/'; ?>">
			<?php echo $title; ?>
		</a>
	</p>

<?php

	}
}

?>

</div> <!-- end secondary -->