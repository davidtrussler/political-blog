/**
 * New file
 */

document.addEventListener('DOMContentLoaded', init, false);

function init() {
	// set up the form
	var toDoModel = new ToDo.ToDoModel(); 
	var container = document.getElementById('list'); 

	toDoModel.setUpForm(document.getElementById('toDoInput')); 
	toDoModel.setUpContainer(container); 
}