<?php

@session_start();

include ('../common/sessions.php'); 

$sessions = new Sessions();
$postClass = ''; 
$postBody = ''; 
$paras = array(); 

// unset all sessions if arriving to the post for the first time
if (!isset($_GET['from']) || (isset($_GET['from']) && $_GET['from'] != 'saved')) {
	$sessions -> unsetAll(); 
}

if (isset($numPosts)) {
	$postId = $postIdArray[$numPosts]; 

	if ($numPosts == count($postIdArray) - 1) {
		$postClass = ' last'; 
	}
}

$numComments = $weblog->getNumComments($postId); 

?>

<div class="post<?php echo $postClass; ?>">
	<p class="date"><?php echo $date; ?></p>

<?php

// title
echo '<h3>'.html_entity_decode($postTitle).'</h3>'; 

// body
echo $body; 

/*
 * comments - removed until made safe
 * 
if ($numComments == 1) {
	$commentText = 'comment'; 
} else {
	$commentText = 'comments'; 
}

?>

	<p><?php echo $numComments; ?>&nbsp;<?php echo $commentText; ?></p>
*/

?>

	<h3>Share this article</h3>

	<ul class="connect">
		<li id="twitter">
		  <a href="https://twitter.com/share?text=<?php echo $postTitle; ?>&amp;url=<?php echo $SERVER_ROOT; ?>/blog/<?php echo $titleId; ?>/" target="_blank">Twitter</a>
		</li>

		<li id="facebook">
		  <a href="https://www.facebook.com/sharer.php?u=<?php echo $SERVER_ROOT; ?>/blog/<?php echo $titleId; ?>/" target="_blank">Facebook</a>
		</li>
	</ul>

<?php
/* }

/* do not display tags for the  moment
if (count($postIdArray) > 1) {

?>

	<ul class="tags">

<?php

	$i = 0; 

	foreach ($tags as $tagArray) {
		$i++; 

		if (count($tags) == $i) {
			$tagClass = 'last'; 
		} else {
			$tagClass = ''; 
		}

		echo 
			'<li class="'.$tagClass.'"><a href="blog?tagNameId='.$tagArray['tagNameId'].'">'.$tagArray['name'].'</a></li>'; 
	}
}

?>

	</ul>
*/

?>

</div> <!-- end post -->