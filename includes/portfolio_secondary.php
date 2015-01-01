<div id="secondary">

<!-- FOLIOS -->
	<ul id="folio">

<?php

if ($pageNum > 1) {
	echo '<li><a href="portfolio?view=main&amp;page='.($pageNum - 1).'&amp;job='.$job.'">previous</a></li>';
}

for ($i = 1; $i <= $num_pages; $i++) {
	if ($i == $pageNum) {
		echo '<li class="live">'.$i.'</li>'; 
	} else {
		echo '<li><a href="portfolio?view=main&amp;page='.$i.'&amp;job='.$job.'">'.$i.'</a></li>';
	}
}

if ($pageNum != $num_pages) {
	echo '<li><a href="portfolio?view=main&amp;page='.($pageNum + 1).'&amp;job='.$job.'">next</a></li>';
}

?>

	</ul>

	<!-- THUMBNAILS -->
	<div id="portfolio_thumbs">
		<div id="thumb_column_left">

<?php

for ($i = (($pageNum * 4) - 4); $i < (($pageNum * 4) - 2); $i++) {
	$thumb = writeThumb($i, $num_jobs, $portfolio_xml, $pageNum); 
	echo $thumb; 
}

?>

		</div>

		<div id="thumb_column_right">

<?php

for ($i = (($pageNum * 4) - 2); $i < ($pageNum * 4); $i++) {
	$thumb = writeThumb($i, $num_jobs, $portfolio_xml, $pageNum); 
	echo $thumb; 
}

?>

		</div>
	</div>
</div> <!-- end secondary -->