<?php

include ('../common/doctype.php'); 

?>

<html>

<?php

$title = 'home';

include ('../common/variables.php'); 
include ('../common/environment.php'); 
include ('../common/weblog.php'); 
include ('../common/head.php');

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

$weblog = new Weblog($DOC_ROOT);

// TODO - get blog posts as object not 2 db requests
$postIdArray = $weblog->getPostIds('', ''); 

include ('index_primary.php');
include ('index_secondary.php');

?>

			</div><!-- END #content -->

<?php

include ('../common/footer.php');

?>

		</div><!-- END #wrap -->
	</body>
</html>