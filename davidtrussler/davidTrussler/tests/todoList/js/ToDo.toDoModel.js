/**
 * New file
 */

var ToDo = ToDo || {}; 

ToDo.ToDoModel = function() {
	this.setUpForm = function(form) {
		var itemInput = document.getElementById('newItem'); 
		var toDoViews = new ToDo.ToDoViews(); 

		// add event listener to control the 'add item' functionality
		form.addEventListener(
			'submit', 
			function(e) {
				e.preventDefault(); 

				if (itemInput.value !== '') {
					//  display new item
					toDoViews.addItem(itemInput.value); 
					
					// reset form input for next item
					itemInput.value = ''; 
					itemInput.focus(); 
				}
			}, 
			false
		); 
	}; 

	this.setUpContainer = function(container) {
		// add event listener to control the 'completed' functionality
		container.addEventListener(
			'change', 
			function(e) {
				var item = e.target; 
				
				while (item.parentNode.tagName.toUpperCase().indexOf('LI') == -1) {
					item = item.parentNode; 
				}
				
				item = item.parentNode; 
				
				if (e.target.checked == true) {
					item.className = item.className + ' complete';  
				} else {
					item.className = item.className.replace(' complete', '');  
				} 
			}, 
			false
		); 
	}; 
}; 