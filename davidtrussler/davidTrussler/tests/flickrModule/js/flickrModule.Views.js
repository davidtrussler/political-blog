/**
 * New file
**/

var flickrModule = flickrModule || {}; 

flickrModule.Views = function() {
	var ul = document.createElement('ul'); 
	var mainWidth = 0; 
	var mainHeight = 0; 

	this.showMain = function(container, photos) {
		// get width of main section and set image containers to this width
		var mainRect = container.getBoundingClientRect(); 
		var imagesWidth = 0; 

		mainWidth = mainRect.right - mainRect.left; 
		mainHeight = mainRect.bottom - mainRect.top; 
		ul.innerHTML = '';
		ul.style.left = 0; 

		photos.photo.forEach(function(image) {
			var li = document.createElement('li'); 
			var div = document.createElement('div'); 
			var p = document.createElement('p'); 
			var farmId = image.farm; 
			var serverId = image.server; 
			var id = image.id; 
			var secret = image.secret; 
			
			imagesWidth += mainWidth; 
			li.className = 'image'; 
			li.style.width = mainWidth + 'px'; 
			div.style.backgroundImage = 'url(http://farm' + farmId + '.staticflickr.com/' + serverId + '/' + id + '_' + secret + '_n.jpg)'; 
			p.textContent = image.title; 
			p.className = 'title'; 
			li.appendChild(div); 
			li.appendChild(p); 
			ul.appendChild(li); 
			// imgArray.push(li); 
		}); 

		ul.style.width = imagesWidth + 'px'; 
		container.innerHTML = ''; 
		container.appendChild(ul); 
		
		var imagesRect = main.firstElementChild.getBoundingClientRect(); 
		var imagesHeight = imagesRect.bottom - imagesRect.top; 

		main.style.height = imagesHeight + 'px'; 
	}; 
	
	this.changeMain = function(e) {
		var imgArray = []; 
		var thumbs = document.getElementById('thumbs').firstElementChild; 

		for (var i = 0; i < thumbs.children.length; i++) {
			if (thumbs.children[i].tagName.toUpperCase() == 'LI') {
				imgArray.push(thumbs.children[i]); 
			}
		} 
		
		var imgIndex = imgArray.indexOf(e.target.parentNode); 
		ul.style.left = 0 - (mainWidth * imgIndex) + 'px'; 
	}; 

	this.showThumbs = function(container, photos) {
		container.innerHTML = ''; 
		
		photos.photo.forEach(function(image) {
			var li = document.createElement('li'); 
			var img = document.createElement('img'); 
			var farmId = image.farm; 
			var serverId = image.server; 
			var id = image.id; 
			var secret = image.secret; 

			img.src = 'http://farm' + farmId + '.staticflickr.com/' + serverId + '/' + id + '_' + secret + '_s.jpg'; 
			li.appendChild(img); 
			container.appendChild(li); 
		}); 
	}; 
	
	this.showPagination = function(container, pages, page) {
		var maxToDisplay = 5; // both ends
		var html = 
			'<li><a href="first"><<</a></li>' + 
			'<li><a href="previous"><</a></li>'; 
		
		html += '<li>page ' + page + ' of ' + pages + '</li>'; 

		html += 
			'<li><a href="next">></a></li>' + 
			'<li><a href="last">>></a></li>'; 
		
		container.innerHTML = html; 
	};
};