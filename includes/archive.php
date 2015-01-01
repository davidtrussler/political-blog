<h4>archive</h4>

<ul>
	<li><a href="blog.php">All entries</a></li>

<?php 

date_default_timezone_set('Europe/London');

$months = $weblog->getMonths(); 

foreach ($months as $month) {
	$thisMonth = date('F Y', strtotime($month));

?>

	<li><a href="blog.php?month=<?php echo $month; ?>"><?php echo $thisMonth; ?></a></li>

<?php 

} 

?>

</ul>