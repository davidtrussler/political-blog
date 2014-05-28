<div id="primary" class="<?php echo $primaryClass; ?>">

<?php

if (isset($_GET['postId'])) {
	// display single post
	include ('includes/post.php'); 

	$comments = $weblog->getComments($postId); 

	if (count($comments) > 0) {
		echo 
			'<div class="comments">
				<h4>Comments</h4>';
				
		if (isset($saveComment)) {
			echo 
				'<p class="warning">'.$saveComment.'</p>'; 
		}

		foreach ($comments as $comment) {
			$timestamp = $comment['timestamp']; 
			$author = $comment['author']; 
				if ($author == '') {
					$author = 'David Trussler'; 
					$sectionClass = 'owner'; 
				}
		//	$email = $comment['email']; 
			$website = $comment['website']; 
			$body = $comment['body']; 
		//	$title = $comment['title']; 
			$date = $weblog->formatDate($timestamp); 

	?>

					<div>
						<p class="date"><?php echo $date; ?></p>
					</div> <!-- end date -->

					<div>

	<?php

			if ($website) {
				echo 
						'<h5><a href="http://'.$website.'">'.$author.'</a></h5>'; 
			} else {
				echo 
						'<h5>'.$author.'</h5>'; 
			}

	?>

						<p><?php echo $body; ?></p>
					</div> <!-- end author -->

	<?php

		}

	?>

		</div> <!-- end comments -->

	<?php

	}

	?>

		<div class="commentAdd">
			<h4>Add a comment</h4>

			<form action="<?php echo $root; ?>/blog?postId=<?php echo $postId; ?>" method="post">
				<input type="hidden" name="action" value="saveComment"/>

				<fieldset>
					<div class="field clear">

	<?php

	if (in_array('name', $emptyFieldArray)) {
		echo 
						'<p class="warning">Please enter your name below</p>'; 
	}

	?>

						<label for="name">Your name:</label>
						<input 
							type="text" 
							name="name" 
							value="<?php echo $commentAuthor; ?>" 
							id="name"
							placeholder="name"
						/>
					</div> <!-- end name -->

					<div class="field clear">

	<?php

	if (in_array('email', $emptyFieldArray)) {
		echo 
						'<p class="warning">Please enter your email address below</p>'; 
	} elseif ($validatedEmail === false) {
		echo 
						'<p class="warning">Please enter a valid email address below</p>'; 
	}

	?>

						<label for="email">Your email address (this will not be published):</label>
						<input 
							type="email" 
							name="email" 
							value="<?php echo $commentEmail; ?>" 
							id="email"
							placeholder="email"
						/>
					</div> <!-- end email address -->

					<div class="field clear">
						<label for="website">Your website address (optional):</label>
						<input 
							type="url" 
							name="website" 
							value="<?php echo $commentWebsite; ?>" 
							id="website"
							placeholder="website"
						/>
					</div> <!-- end web address -->

					<div class="field clear">

	<?php

	if (in_array('comment', $emptyFieldArray)) {
		echo 
						'<p class="warning">Please enter your comment below</p>'; 
	}

	?>

						<label for="comment">Your comment:</label>
						<textarea name="comment" id="comment"><?php echo $commentBody; ?></textarea>
					</div> <!-- end warning -->

					<div class="field notify clear">
						<input id="notify" type="checkbox" name="notify"/>
						<label for="notify">Tick here to be notified of further comments on this post</label>
					</div> <!-- end notify -->

	<?php

	$captcha_value_1 = rand(0, 10); 
	$captcha_value_2 = rand(0, 10); 
	$captcha_validate = $captcha_value_1 + $captcha_value_2; 

	?>

					<div class="field captcha clear">
						<label for="captcha">Answer this question: <?php echo $captcha_value_1; ?> + <?php echo $captcha_value_2; ?> = </label>
						<input 
							type="number" 
							min="0"
							max="20"
							step="1"
							name="captcha_input" 
							value=""
						/>
						<input type="hidden" name="captcha_validate" value="<?php echo $captcha_validate; ?>"/>
					</div> <!-- end captcha -->

					<div class="actions">
						<button>Post your comment</button>
					</div>
				</fieldset>
			</form>
		</div> <!-- end commentAdd -->

<?php 

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
		<span><a href="blog/<?php echo $titleId; ?>">Read more &#8230</a></span>
	</p>

<?php

	}
}

?>

</div> <!-- end primary -->