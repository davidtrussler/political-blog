<?php

$portfolio_xml = simplexml_load_file('portfolio.xml');
$num_jobs = count($portfolio_xml->job); 
$title = 'web';

include ('constants/environment.php'); 
include ('includes/commonHeader.php');
include ('includes/portfolio_primary.php');
include ('includes/commonFooter.php');

?>