window.onload = init; 

function init() {
	var links = document.getElementsByTagName('a'); 
	var numLinks = links.length; 

	for (var i = 0; i < numLinks; i++) {
		if (links[i].className == 'newWindow') {
			links[i].onclick = function () {
				window.open(this.href); 
				return false; 
			}
		}
	}
}