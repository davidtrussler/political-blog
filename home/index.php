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
				<h1>Reason in revolt</h1>

<?php

include ('../common/nav.php');

?>

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