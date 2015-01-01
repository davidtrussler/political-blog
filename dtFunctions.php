<?php

function portfolio_page($client, $page) {
	require('portfolio.php'); 

	$client_title = $client_array[$client]['client']; 

	return
		'<div class="portfolio_page_top">
			<img class="thumb_corner_1_TR" src="graphics/detail_corner_1_TR.gif" alt="">	
			<p class="pic_title">client: '.$client_title.'</p>
			<div class="thumb_corner_2_TR"></div>	
		</div>
	
		<div class="portfolio_page_bottom">
			<img class="thumb_corner_1_BL" src="graphics/detail_corner_1_BL.gif" alt="">	
			<p class="pic_link"><a href="?view=details&client='.$client.'&page='.$page.'">details</a></p>	
			<div class="thumb_corner_2_BL"></div>	
		</div>'; 
}

function writeThumb($i, $num_jobs, $portfolio_xml, $page) {
	if ($portfolio_xml->job[$i]) {
		$thumb = '<a href="portfolio?job='.$i.'&amp;page='.$page.'"><img src="image_create.php?image='.$portfolio_xml->job[$i]->image[0].'&amp;type=thumb" class="portfolio_thumb" alt="'.$portfolio_xml->job[$i]->client[0].': '.$portfolio_xml->job[$i]->project[0].'"/></a>'; 

		return $thumb; 
	}
}

?>