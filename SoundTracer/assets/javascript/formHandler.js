/**
 * formHandler.js
 * creates a FormHandler object
**/

var FormHandler = function() {}

FormHandler.prototype.setUpForms = function() {
	var forms = document.getElementsByTagName('form'); 
	
	if (forms && forms.length > 0) {
		for (var i = 0; i < forms.length; i++) {
			if (forms[i].name == 'searchForm') {
				var paginator =  new Paginator(); 
				var per_page = constants.PERPAGE; 
				var actionbar = document.getElementById('actionbar') || null; 
				
				if (actionbar) {
					for (var j = 0; j < actionbar.getElementsByTagName('a').length; j++) {
						if (actionbar.getElementsByTagName('a')[j].parentNode.className.indexOf('search') != -1) {
							actionbar.getElementsByTagName('a')[j].addEventListener(
								'click', 
								function(e) {
									if (document.getElementById('search').className.indexOf('hidden') != -1) {
										document.getElementById('search').className = '';
									} else {
										document.getElementById('search').className = 'hidden';
									}
								}, 
								false
							); 
						}
					}
				}

				forms[i].parentNode.className = 'hidden'; 

				forms[i].addEventListener(
					'submit', 
					
					function(e) {
						e.preventDefault(); 
						
						var inputs = this.getElementsByTagName('input');
						var searchTermField = document.getElementById('searchField');
						var searchTerm = searchTermField.value;
						var searchType = "";
						
						for (var i = 0; i < inputs.length; i++) {
							if (inputs[i].name == 'searchType') {
								if (inputs[i].checked) {
									if (inputs[i].value == "all") {
										searchType = "";
									} else {
										searchType = inputs[i].value;
									}
								}
							}
						}

						var url = constants.URL_API + 'database/search?q=' + searchTerm + '&type=' + searchType + '&per_page=' + per_page; 
						var type = 'searchResults'; 
				
						// add page to display results
						paginator.addPage(url, type); 
						
						// hide search box on submit
						if (document.getElementById('search').className.indexOf('hidden') == -1) {
							document.getElementById('search').className = 'hidden';
						}
					},
				
					false
				); 
			}
		}
	}
}