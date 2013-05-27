<?php

$title = 'home';

include ('includes/weblog.php'); 

$weblog = new Weblog();

// TODO - get blog posts as object not 2 db requests
$postIdArray = $weblog->getPostIds('', ''); 

include ('includes/commonHeader.php');
include ('includes/index_primary.php');
include ('includes/index_secondary.php');
include ('includes/commonFooter.php');

?>