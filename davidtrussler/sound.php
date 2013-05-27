<?php

$title = 'sound';

if (isset($_GET['section']) && $_GET['section'] == 'experiments') {
	$title .= ' | experiments';
} elseif (isset($_GET['section']) && $_GET['section'] == 'music') {
	$title .= ' | music';
}

require ('includes/commonHeader.php');

?>

<h2>Sound</h2>

<?php 

if (isset($_GET['section']) && $_GET['section'] == 'experiments') {
	
?>

<ul id="breadcrumbs" class="clear">
	<li>
		<a href="sound">back to sound main page</a>
	</li>
</ul>

<?php 
	
	require ('includes/sound_experiments.php');
} elseif (isset($_GET['section']) && $_GET['section'] == 'music') {

?>

<ul id="breadcrumbs" class="clear">
	<li>
		<a href="sound">back to sound main page</a>
	</li>
</ul>

<?php 

	require ('includes/sound_music.php');
} else {
	
?>

<ul id="breadcrumbs" class="clear">
	<li>
		<a href="sound?section=experiments">experiments</a>
	</li>

	<li>
		<a href="sound?section=music">music</a>
	</li>
</ul>

<?php 

	require ('includes/sound_main.php');
}

require ('includes/commonFooter.php');

?>