/**
 * New file
**/

window.addEventListener('DOMContentLoaded', init, false); 

function init() {
	// set up event listeners
	// forms
	var forms = document.getElementsByTagName('form'); 

	for (var i = 0, max = forms.length; i < max; i++) {
		if (forms[i].name == 'search') {
			// set up search module
			var search = new flickrModule.Search(forms[i]); 
			
			search.init(); 
		}
	}
}