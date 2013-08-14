<?php

$title = 'home';

include('constants/environment.php'); 
include ('classes/weblog.php'); 
include ('includes/commonHeader.php');

$weblog = new Weblog($DOC_ROOT);

// TODO - get blog posts as object not 2 db requests
$postIdArray = $weblog->getPostIds('', ''); 

include ('includes/index_primary.php');
include ('includes/index_secondary.php');
include ('includes/commonFooter.php');

?>