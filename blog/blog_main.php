<?php

session_start();

include ('../includes/doctype.php'); 
include ('../includes/commonVariables.php'); 

if (isset($_GET['postId'])) {
	$primaryClass = 'blogPost'; 
} else {
	$primaryClass = 'blogMain'; 
}

$title = 'blog';

include ('../constants/environment.php'); 
include ($DOC_ROOT.'/classes/weblog.php'); 

?>

<html>

<?php

include ('../includes/head.php');

?>

	<body class="<?php echo $pageArray[0]; ?>">
		<div id="wrap">
			<div id="header" class="clear">
				<h1>political-blog</h1>

				<ul class="nav">

<?php

// identify if the link is to the current page
foreach($link_array as $url => $title) {
	$dest = explode('?', $url)[0]; 
	$thisPage = array_pop(explode('/', $self));

	if ($dest == 'home') {
		$dest = 'index'; 
	}

	if (stripos($thisPage, $dest) !== false) {
		echo '<li class="live">'.$title.'</li>'; 
	} else {
		echo '<li><a href="'.$SERVER_ROOT.$url.'">'.$title.'</a></li>'; 
	}
}

?>

				</ul>
			</div>

			<div id="content" class="clear">

<?php

include ($DOC_ROOT.'/classes/dateFormatter.php'); 

$weblog = new Weblog($DOC_ROOT);
$dateFormatter = new DateFormatter();

// TODO - get blog posts as object not 2 db requests
// and get post from titleid not postid
if (isset($_GET['tagNameId'])) {
	$postIdArray = $weblog->getPostIds($_GET['tagNameId'], ''); 
} elseif (isset($_GET['month'])) {
	$postIdArray = $weblog->getPostIds('', $_GET['month']); 
} else {
	$posts = $weblog->getPosts(); 
}

echo '<!-- BEGIN blog_main -->'; 

if (!isset($_GET['postId'])) {
	include ($DOC_ROOT.'/blog/blog_intro.php'); 
}

include ($DOC_ROOT.'/blog/blog_primary.php'); 

if (isset($_GET['postId'])) {
	include ($DOC_ROOT.'/blog/blog_secondary.php'); 
}

?>

			</div><!-- END #content -->

<?php

include ($DOC_ROOT.'/includes/commonFooter.php');

?>

		</div><!-- END #wrap -->
	</body>
</html>