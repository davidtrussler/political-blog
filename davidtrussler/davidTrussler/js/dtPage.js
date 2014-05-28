$(document).ready(function() {
	setUpLinks(); 

	if ($('body.music').length > 0) {
		setUpAudio(); 
	}
})

function setUpLinks() {
	var links = document.getElementsByTagName('a'); 
	var numLinks = links.length; 

	for (var i = 0; i < numLinks; i++) {
		if (links[i].className.indexOf('newWindow') != -1) {
			links[i].onclick = function () {
				window.open(this.href); 
				return false; 
			}
		}
	}
}

function setUpAudio() {
	// find all audio elements
	audioArray = document.getElementsByTagName('audio'); 

	// find whether device can play this type of audio
	var audioObjectArray = new Array(); 

	for (var i = 0; i < audioArray.length; i++) {
		var audioElement = audioArray[i]; 
		var audioElementArray = audioElement.children; 

		for (var j = 0; j < audioElementArray.length; j++) {
			if (audioElementArray[j].tagName.toLowerCase() == 'source') {
				var audioSource = audioElementArray[j]; 
				var type = audioSource.type; 
				var canPlay = audioElement.canPlayType(type); 

				if (canPlay == 'probably' || canPlay == 'maybe') {
					return;
				}
			} else if (audioElementArray[j].tagName.toLowerCase() == 'object') {
				// if not fallback to Flash
				// this is in case the device understands the tag but not the codec
				// i'm looking at you android!
				var audioObject = audioElementArray[j]; 

				audioObjectArray.push(audioObject); 
			}
		}
	}

	for (var i = 0; i < audioObjectArray.length; i++) {
		var audioObject = audioObjectArray[i]; 
		var audioElement = audioObject.parentNode; 
		
		audioElement.parentNode.replaceChild(audioObject, audioElement); 
	}
}