<!-- BEGIN index_secondary -->
<div id="secondary">
	<div class="panel">
		<h5>Follow me on Twitter</h5>

		<a 
			href="https://twitter.com/davidTrussler" 
			class="twitter-follow-button" 
			data-show-count="true" 
			data-show-screen-name="false"
		>Follow @davidTrussler
		</a>

		<script>
			!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
		</script>
	</div>

	<div class="panel last">
		<h5>Latest Blog Posts</h5>

		<ul>

<?php

for ($i = 0; $i < count($postIdArray); $i++) {
	$thisPostId = $postIdArray[$i]; 
	$post = $weblog->getPost($thisPostId);
	$title = html_entity_decode($post['title']); 
	$titleId = $post['titleId']; 

?>

		<li><a href="<?php echo $SERVER_ROOT.'blog/'.$titleId.'/'; ?>"><?php echo $title ?></a></li>

<?php

}

?>
		</ul>
	</div>
</div>
<!-- END index_secondary -->