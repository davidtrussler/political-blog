<h3>Experiments</h3>

<p>I&#8217;m currently working on a number of experiments in sound generation using the 
<a href="http://www.w3.org/TR/webaudio/" class="newWindow">HTML5 WebAudio API</a>. 
The first result of this sonic experimentation is presented below.</p>

<p>It is a user-controlled generative sound piece, 
consisting of two pulses that begin playing the same frequency sound (a simple sine wave) at the same tempo. 
The user can change the frequency and the tempo of these pulses and can further intervene in the 
process by changing the degree to which the two tones deviate from each other in frequency and tempo.</p>

<div class="experiment">

<?php 

include('../webAudio/pulseDeviation.php'); 

?>

</div>