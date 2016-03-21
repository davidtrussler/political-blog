<!-- BEGIN index_secondary -->
<div id="secondary">
	<div class="panel">
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