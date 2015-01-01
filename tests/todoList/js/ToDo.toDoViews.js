/**
 * New  file
 */

var ToDo = ToDo || {}; 

ToDo.ToDoViews = function() {
	var container = document.getElementById('list'); 
	
	this.addItem = function(value) {
		var html = 
			'<li class="item">' + 
				'<form>' + 
					'<input type="checkbox"/>' + 
				'</form>' + 
				'<span>' + 
					value + 
				'</span>' + 
			'</li>'; 
		
		container.innerHTML += html; 
	}; 
};