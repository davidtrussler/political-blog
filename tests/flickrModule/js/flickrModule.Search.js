/**
 * New file
**/

var flickrModule = flickrModule || {}; 

flickrModule.Search = function(form) {
	var currentPage = 1; 
	var currentPhoto = 1; 
	var pages = 0; 
	var views = new flickrModule.Views(); 
	
	this.init = function() {
		form.addEventListener('submit', getPhotos, false); 
	}; 
	
	getPhotos = function(e) {
		e.preventDefault(); 

		if (e.target.href) {
			var hrefArray = e.target.href.split('/'); 
			var requestedPage = hrefArray[hrefArray.length - 1];
			
			console.log(requestedPage); 

			if (requestedPage == 'previous') {
				currentPage--; 
			} else if (requestedPage == 'next') {
				currentPage++; 
			} else if (requestedPage == 'first') {
				currentPage = 1; 
			} else if (requestedPage == 'last') {
				currentPage = pages; 
			} else {
				currentPage = requestedPage; 
			}
		}
		
		console.log(currentPage); 

		var page = currentPage; 
		var ajax = new flickrModule.Ajax(); 
		var method = 'get'; 
		var baseUrl = 'https://api.flickr.com/services/rest/?method=flickr.photos.search&nojsoncallback=1';
		var api_key = '69461d4a3e1d66719c8ee048c2c56109'; 
		var text = document.getElementById('searchInput').value; 
		var format = 'json'; 
		var per_page = 15; 
		var url = baseUrl + '&api_key=' + api_key + '&text=' + text + '&format=' + format + '&per_page=' + per_page + '&page=' + page; 
		
		ajax.getData(method, url, jsonFlickrApi);
	}; 
	
	jsonFlickrApi = function(data) {
		var thumbs = document.getElementById('thumbs'); 
		var photos = JSON.parse(data.content).photos; 
		
		console.log(photos); 
		
		for (var i = 0, ul = thumbs.getElementsByTagName('ul'); i < ul.length; i++) {
			if (ul[i].className.indexOf('images') != -1) {
				views.showThumbs(ul[i], photos); 
			} else if (ul[i].className.indexOf('pagination') != -1) {
				pages = photos.pages; 
				views.showPagination(ul[i], pages, photos.page); 
				ul[i].addEventListener(
					'click', 
					getPhotos, 
					false
				); 
			}
		}
		
		// views.showMain(document.getElementById('main'), photos.photo[currentPhoto - 1]); 
		views.showMain(document.getElementById('main'), photos); 
	}; 
	
	// event listener to control change of display of main image
	document.getElementById('thumbs').addEventListener(
		'click', 
		views.changeMain, 
		false
	); 


}; 