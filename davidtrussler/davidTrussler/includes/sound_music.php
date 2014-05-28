<div id="intro">
	<h3>Music</h3>

	<p>Below is a selection of my sonic explorations from around 2000 up to about 2006, presented here in reverse chronological order. Music is something I haven&#8217;t done for a while but I decided to brush these off and make them available here as I have recently started to get interested in producing more: you have been warned!</p>

	<p>Despite my love of noise&#8212;sometimes at its most extreme&#8212;most of these seem pretty restrained to me now that I lsten to them again. For the most part they were made with <a href="http://supercollider.sourceforge.net/" class="newWindow">SuperCollider</a>, an audio programming language, which I have used sometimes to make generative music and sometimes as a means to generate individual sounds that would be sequenced afterwards in a more traditional manner. As time goes on these pieces get less about actual instruments and more about generated sound or processed found sound. Also the origins of these and the means of their production have become blurred or forgotten allowing me to hear them as if they were the work of someone else.</p>

	<p>I enjoy listening to these from time to time and I think it&#8217;s possible to trace a line of development through them. One of the main themes of these pieces would be the tension between improvised playing&#8212;for me this is primarily clarinet and occasionally guitar&#8212;and computer-generated sound. These seem to represent opposite poles of sound-making and stand apart like a painting by Mark Rothko and a drawing by Sol LeWitt, coming respectively from a more visceral or cerebral source. Another major theme is that of randomness&#8212;influenced doubtless by the ideas of John Cage, or maybe just a manifestation of my lack of decision-making abilities.</p>

	<p>Finally a word on the titles. I struggle with these and for some reason like to give pieces titles which are in some way evocative but have no meaning in any known language. They usually come from working titles and have some linguistic link to their origin at some deep and unfathomable level.</p>

	<p>Anyway here they are. Enjoy.</p>
</div>

<div id="tracks">

<?php

/* based on old page from levmusic--> */
$trackArray = array(
	'seinix' => array(
		'title' => 'seinix',
		'category' => 'electronics',
		'description' => 'After creating <span class="namedTitle">foniq</span>, which was a remix from supplied sound samples, I decided to recreate its spirit in a piece that used completely original sounds. This collection of clicks and bleeps is the result.'
	), 

	'menige' => array(
		'title' => 'menige',
		'category' => 'electronics',
		'description' => 'This piece is constructed entirely from processed piano sounds, sometimes recognisable, 
		occasionally processed out of all recognition. It originated from an invitation by the record label 12k to remix the source sounds used by Taylor Deupree and Kenneth Kirschner in their release <a href="http://12k.com/index.php/site/releases/post_piano_2/" class="newWindow">Post_Piano 2</a>. In my own mind it is perhaps the piece with which I am most pleased listening back. The orginal samples were of very low quality and much of the sound present here is as much the tape hiss and background noise present on the orginals as the actual pianos.'
	),

	'cifre' => array(
		'title' => 'cifre',
		'category' => 'electronics/radio/guitar',
		'description' => 'Atmospheric rumblings disturbed by keyboards, heavily distorted guitar and sounds gathered from the ether make up this piece. It was made around the time of the UK general election of 2005, and some of the radio reflects that. Mostly though, I wanted to use a load of speech samples in a variety of languages&#8212;most of which I would not undertand&#8212;by a process of turning through the radio dial to capture whatever happened to be there at that moment. There was originally a clarinet improvisation on this and some of the sounds on the piece are processed responses to this, although I removed the orginal source leaving a kind of emptiness.'
	), 

	'foniq' => array(
		'title' => 'foniq',
		'category' => 'electronics',
		'description' => 'This has its origins as a remix project for the <a href="http://porousher.hu" class="newWindow">porousher</a> label in Hungary. It was supposed to feature on a CD but to be honest I have no idea if it ever did, although it did get some radio play on <a href="http://wrvu.org" class="newWindow">WRVU</a> in Nashville. This piece, and the subsequent reworking <span class="namedTitle">seinix</span>, probably represent the nearest approach I have ever made&#8212;and maybe am likely to make&#8212;to something that approaches standard notions of beat and melody. I don&#8217;t go there often but, contrary to the opinion of some, I have nothing against these things.'
	), 

	'y21b_b' => array(
		'title' => 'y21b_b',
		'category' => 'electronics/clarinet',
		'description' => 'This is a variation on the slightly earlier piece, <span class="namedTitle">year zero</span>, which is based on a processed motif played on clarinet together with some electronic sounds based on those. The clarinet motif is slowed down and repeated over and over throughout the piece, although I don&#8217;t think it would be easily recognised as such.'
	), 

	'yearzero' => array(
		'title' => 'year zero',
		'category' => 'electronics/guitar',
		'description' => 'This piece is based on swirling electronic drones and whines battling with the sounds of a heavily-processed guitar. I was inspired by a photograph in John Pilger&#8217;s book <span class="namedTitle"><a href="http://johnpilger.com/books/reporting-the-world-john-pilgers-great-eyewitness-photographers" class="newWindow">Reporting the World: John Pilger&#8217;s Great Eyewitness Photographers</a></span>, depicting cars and other modern day household items decaying and overgrown by vegetation as a result of policies of the Khmer Rouge in Cambodia&#8212;a haunting image. I was after a kind of mix of an electronic machine-created, metallic sound interrupted and eventually overcome by the more organic sound of an electric guitar played, if I remember correctly, with a screwdriver. It might be the noisiest piece I&#8217;ve ever done although still a little way off Merzbow.'
	), 

	'scr3h' => array(
		'title' => 'scr3h',
		'category' => 'electronics/clarinet',
		'description' => 'This piece began life as a low-frequency drone that slowly splits into two separate drones of sightly different frequencies and then returns to its original form. On top of this I layered some multi-tracked improvised clarinet motifs. These appear at intervals that are random, although programmed to occure with increasing and then decreasing frequency, in phase with the drones. I guess that makes it a pretty explicit mix of system-based and improvised sound.'
	),

	'sc_c2d4g' => array(
		'title' => 'sc_c2d4g',
		'category' => 'electronics/clarinet',
		'description' => 'This is based on a drone with a processed clarinet motif. Listening again it&#8217;s interesting that I seemed to be struggling at this time to escape from the need to base it in some fairly conventional musical ideas of actual notes and rhythm&#8212;you can even tap your foot to it here and there&#8212;but maybe it would fail the Old Grey Whistle Test. I would soon get over it though.'
	), 

	'fkdmxr' => array(
		'title' => 'fkdmxr',
		'category' => 'electronics/clarinet',
		'description' => 'I was setting up my mixer after moving house and found I&#8217;d connected it up wrongly leading to a sudden squall of feedback. The noise was so good I recorded it and some time later added some improvised clarinet. As such it&#8217;s a kind of very rough spur of the moment kind of thing&#8212;a case of serendipity. I have occasionally thought about developing it further but never have. Maybe one day&#8230;'
	), 

	'controlz' => array(
		'title' => 'control z',
		'category' => 'electronics',
		'description' => 'This is an excerpt from a compilation CD released by the <a href="http://reaktion.free.fr/" class="newWindow">(re)aktion</a> label in France. It was one of many pieces of a minute&#8217;s duration or less submitted to the label and released on CD. It involved, if I remember corrrectly, the random distribution of a number of samples which were made into a more meaningful soundwork and sent back to be compiled.' 
	)
); 

foreach ($trackArray as $name => $track) {
	$title = $track['title']; 
	$category = $track['category']; 
	$description = $track['description']; 

?>

	<div class="block" id="<?php echo $name; ?>">
		<h3><?php echo $title; ?></h3>
		<h4><?php echo $category; ?></h4>
		<p>
			<img src="graphics/<?php echo $name; ?>.gif" class="pic"/>
			<?php echo $description; ?>
		</p>

		<audio controls>
			<source src="http://www.zen146343.zen.co.uk/davidtrussler/audio/<?php echo $name; ?>.mp3" type="audio/mpeg" >
			<source src="http://www.zen146343.zen.co.uk/davidtrussler/audio/<?php echo $name; ?>.ogg" type='audio/ogg; codecs="vorbis"'> 

			<!-- http://flash-mp3-player.net/ -->
			<object 
				type="application/x-shockwave-flash" 
				data="player_mp3_maxi.swf" 
				width="299" 
				height="30"
			>
				<param name="movie" value="player_mp3_maxi.swf"/>
				<param name="FlashVars" value="mp3=http://www.zen146343.zen.co.uk/davidtrussler/audio/<?php echo $name; ?>.mp3&amp;showstop=1&amp;showvolume=1&amp;volume=150"/>

				<p class="warning">Your browser does not support the audio element and the Flash plugin is not installed.</p>
			</object>
			<!-- END http://flash-mp3-player.net/ -->
		</audio> 
	</div>

<?php

}

?>

</div>