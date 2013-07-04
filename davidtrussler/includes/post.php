<?php

$postClass = ''; 
$postBody = ''; 
$paras = array(); 

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

	<ul class="connect">
		<li id="twitter">
			<a 
				href="https://twitter.com/share" 
				class="twitter-share-button"
			>Tweet</a>

			<script>
				!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
			</script>
		</li>

		<li id="facebook">
			<div id="fb-root"></div>

			<script>
				(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
			</script>

			<div class="fb-like" data-send="false" data-layout="button_count" data-width="" data-show-faces="false"></div>
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