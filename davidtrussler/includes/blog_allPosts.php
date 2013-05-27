<?php

// rewrite this file as a switch statement
// before second post added

// there are no posts
if (count($postIdArray) == 0) {

?>

<p>There are no posts in this blog.</p>

<?php

} else {
	// there is one post
	if (count($postIdArray) == 1) {
		$numPosts = 0; 
		include ('includes/post.php'); 
	} else {

//	echo '<div id="primary">'; 

	for ($numPosts = 0; $numPosts < count($postIdArray); $numPosts++) {
		include ('includes/post.php'); 

//	echo '</div> 	 <!-- end of primary -->'; 

?>

<!--
<div id="secondary">
	<div id="archive">
-->

<?php // include('includes/archive.php'); ?>

	<!--
	</div>

	<div id="tags">
	-->

<?php // include('includes/tags.php'); ?>

	<!--
	</div>
</div> end of secondary -->

<?php

		}
	}
}

?>