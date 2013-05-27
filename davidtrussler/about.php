<?php

/* line added for test purposes only */

require ('dtPage.inc');

$about = new DtPage();

$title = 'about';

$content = 
	'<div id="content">
		<div class="col_left-3_2">
			<h2>About Me</h2>

			<img src="graphics/davePoster.jpg" alt="David Trussler"/>

			<p class="first">I am a web developer based in Coventry, West Midlands, UK. I have been working in this field for the last 3 or more years after a lifetime spent in the print industry, both in design and in the actual process of applying ink to paper.</p>

			<p>Indeed, I have still been involved in this until quite recently, occasionally working on both litho and letterpress. I find getting my hands literally dirty provides a welcome relief from rearranging pixels on a screen! With this background, it&#8217;s no surprise that I am a bit obsessed with good, old-fashioned values of typography and find bringing this into the digital age a fascinating challenge. In fact I am sometimes amazed by the resemblance of juggling type, leading, furniture and letterpress forms with CSS floating and positioning!</p>

			<p>In the realm of the internet, my main areas of expertise are XHTML, CSS, JavaScript, PHP and MySQL. I am still more than handy from my print design days with Photoshop and Illustrator which I use to put a site together before the coding begins. I&#8217;m also pretty passionate about web compliance and accessibility standards.</p>

			<p>My other main passion is music: my tastes are eclectic, and I dabble from time to time in both improvised music (playing clarinet) and electronic music. My output in the latter field has been described as &#8220;just noise&#8221; (which is just fine by me!).</p>

			<p>When I have spare time, I can be found either heading off to the countryside for a camping expedition, or over to France to spend some time absorbing the Gallic way of life.</p>
		</div>
	
		<div class="col_right-3_1">
			<h3>Latest News</h3>
	
			<p class="first">I am currently working on a number of fascinating freelance projects, having recently finished working on a contract with an insurance company, in charge of developing their online presence and building applications for use internally.</p>

			<p>Currently I am putting together a <a href="http://www.futuragraphics.eu/client/tmf_thinkInsurance/new.php" class="newWindow">form</a> for another insurance company (although I don&#8217;t want to get type-cast in this particular industry!). In particular I have been concentrating on making the form as user-friendly as possible by bringing in sections on demand.</p>

			<p>Another ongoing project is a redesign of the site for the <a href="http://www.socialistalliance.org.uk" class="newWindow">Socialist Alliance</a>. I have recently finsished writing a full PHP/MySQL-based Content Management System for this site and I am currently working on writing the code for a blog.</p>

			<p>Other projects include a site for a company letting flats in Istanbul, including a full reservation facility, which is proving a hugely enjoyable challenge to build. We have just made live a <a href="http://www.myistanbulflat.com/" class="newWindow">beta version</a> of this for testing.</p>

			<p>My most recently completed work was to implement a <a href="http://www.gemrestaurant.org.uk/book.php" class="newWindow">booking form</a> for Gem Restaurant, whose website I built some time previously. This allows customers to book a table via an online form, which, once completed by the visitor, sends the booking request to the restaurant via email. I wrote a JavaScript-based draggable calendar to ensure a user-friendly experience for this, which is added to the page via progressive enhancement.</p>

			<p>Watch this space for further developments or follow me on <a href="http://www.twitter.com/davidTrussler"  class="newWindow">Twitter</a>!</p>
		</div>

		<div class="col_foot"></div>
	</div>'; 

$about->writePage($title, $content, '');

?>