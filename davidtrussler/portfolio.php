<?php

$portfolio_xml = simplexml_load_file('portfolio.xml');
$num_jobs = count($portfolio_xml->job); 
// $num_pages = ceil($num_jobs / 4); 

/*
if (isset($_GET['job'])) {
	$job = (int) $_GET['job']; 
} else {
	$job = 0;
}
*/

/*
if (isset($_GET['page']) && $_GET['page'] != '') {
	$pageNum = $_GET['page']; 
} else {
	$pageNum = 1; 
}
*/

$title = 'web';

// include ('dtFunctions.php');
// include ('portfolioArrays.php');

include ('includes/commonHeader.php');
include ('includes/portfolio_primary.php');
// include ('includes/portfolio_secondary.php');
include ('includes/commonFooter.php');

?>