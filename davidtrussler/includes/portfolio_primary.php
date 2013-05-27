<div id="primary">

<?php

for ($job = 0; $job < $num_jobs; $job++) {
	$siteUrl = $portfolio_xml->job[$job]->url;
	$client = $portfolio_xml->job[$job]->client;
	$project = $portfolio_xml->job[$job]->project;
	$text = $portfolio_xml->job[$job]->text; 
	$image = 'graphics/'.$portfolio_xml->job[$job]->image; 
	// $num_programmes = count($portfolio_xml->job[$job]->technologies->programmes->label);
	// $num_languages = count($portfolio_xml->job[$job]->technologies->languages->label);
	$image_size = getimagesize($image); 
	$height = $image_size[1]; 

	$jobClass = ''; 
	if ($job == $num_jobs - 1) {
		$jobClass = ' last'; 
	}

?>

	<!--
	<style type="text/css">
		#portfolio_details {
			height: <?php echo $height; ?>px; 
			background-image: url(<?php echo $image; ?>); 
		}

		.portfolio_details_bottom {
			margin-top: <?php echo ($height - 25); ?>px; 
		}
	</style>
	-->

	<!-- 
	<div id="portfolio_details">
		<div class="portfolio_details_bottom">
			<img class="thumb_corner_1_BL" src="graphics/detail_corner_1_BL.gif" alt=""/>	
			<p class="pic_link"><a href="<?php echo $siteUrl; ?>" class="newWindow">visit site</a></p>	
			<div class="thumb_corner_2_BL"></div>	
		</div> 
	</div> 
	--> 

	<div class="job<?php echo $jobClass; ?>">
		<h3>
			<span>client: <?php echo $client; ?></span>
			<span>project: <?php echo $project; ?></span>
		</h3>

		<div class="imgContainer">
			<img src="<?php echo $image; ?>"/>
		</div>

		<?php echo $text; ?>

		<p class="link"><a href="<?php echo $siteUrl; ?>" class="newWindow">visit site</a></p>
	</div>

<?php

}

?>

</div> <!-- end primary -->