/* CREATES SEARCH RESULTS LISTING, VERSIONS AND RELEASES, replaces searchResults.js */

var Lister = function() {}; 

Lister.prototype.displayData = function(data, thisPage, type, query) {
	console.log('Lister.displayData'); 
	
	var library = new Library(); 
	var pagination = data.pagination; 
	var page = pagination.page; 
	var pages = pagination.pages; 
	var per_page = pagination.per_page; 
	var pagItems = pagination.items; 
	var displayed; 
	var items; 

	if (data.results) {
		var items = data.results; 
	} else if (data.releases) {
		var items = data.releases; 
	} else if (data.versions) {
		var items = data.versions; 
	}

	// TODO assign Items to a global variable and construct as other objects
	var items = Items.addItems(items); 
	
	if (items.length == 0) {
		var p = document.createElement('p'); 
		p.textContent = constants.SEARCH_NO_RESULTS; 
		thisPage.appendChild(p); 
	} else {
		if (pagItems > page * per_page) {
			displayed = page * per_page; 
		} else {
			displayed = pagItems; 
		}

		/* items -- */
		if (page == 1) {
			// set up page heading and list container
			var ul_list = document.createElement('ul'); 
			var h2 = document.createElement('h2'); 
			var detailType; 
			
			if (type == 'searchResults') {
				if (query.type) {
					h2.innerHTML = 'Search results for &#8220;' + query.q + '&#8221; in category &#8220;' + query.type + '&#8221;';
				} else {
					h2.innerHTML = 'Search results for &#8220;' + query.q + '&#8221;'; 
				}
			} else if (type == 'releases') {
				if (query.artistName) {
					var artistName = query.artistName.replace('%20', ' '); 
					h2.innerHTML = 'Releases by &#8220;' + artistName + '&#8221;'; 
				} else if (query.labelName) {
					var labelName = query.labelName.replace('%20', ' '); 
					h2.innerHTML = 'Releases on &#8220;' + labelName + '&#8221;'; 
				}
				
				detailType = 'release'; 
			} else if (type == 'versions') {
				var title = query.title.replace('%20', ' '); 
				h2.innerHTML = 'Versions of &#8220;' + title + '&#8221;'; 
				detailType = 'release'; 
			} else if (type == 'labels') {
				var title = query.title.replace('%20', ' '); 
				h2.innerHTML = 'Versions of &#8220;' + title + '&#8221;'; 
				detailType = 'label'; 
			}
			
			thisPage.appendChild(h2); 
		} else {
			for (var i = 0; i < thisPage.children.length; i++) {
				if (thisPage.children[i].tagName == 'UL') {
					var ul_list = thisPage.children[i];
				}
			} 
		} 
		
		// display sort items on certain types
		/* TODO: fix sorter
		 * 
		if (type == 'releases' || type == 'versions') {
			var sorter = new ArraySorter(); 

			var items_sorted = sorter.sort(items, thisPage); 
		} else {
		 */
			var items_sorted = items; 
		// }


		this.displayList(ul_list, items_sorted); 

		if (page == 1) {
			thisPage.appendChild(ul_list); 
		}
		/* -- items */

		/* pagination -- */
		if (pagination.urls.next) {
			// var li = document.createElement('li'); 
			var p = document.createElement('p'); 
			var a = document.createElement('a'); 
			var span = document.createElement('span'); 

			span.innerText = 'Displaying ' + displayed + ' of ' + pagItems + ' items'; 
			span.className = 'counter'; 
			a.href = pagination.urls.next; 
			a.innerText = constants.PAGE_NEXT; 
			a.appendChild(span); 
			// li.appendChild(a); 
			p.appendChild(a); 
			// ul_list.appendChild(li); 

			// li.firstChild.addEventListener(
			p.firstChild.addEventListener(
				'click', 
				function(e) {
					var paginator = new Paginator; 

					e.preventDefault(); 
					paginator.addToPage(this.href, type, thisPage); 
					this.parentNode.removeChild(this); 
				}, 
				false
			); 

			thisPage.appendChild(p); 
		}
		/* -- pagination */
	}
}

Lister.prototype.displayList = function(container, items) {
	console.log('Lister.displayList'); 
	
	var listings = new Array(); 
	var paginator = new Paginator(); 
	
	for (item in items) {
		/* unused returned data
		id 
		uri 
		main_release
  		role
  		status
		resource_url
		*/
		
		var dateFormatter = new DateFormatter();
		var item = items[item]; 
		var ul = document.createElement('ul'); 
		var li_primary = document.createElement('li'); 
		var a_primary = document.createElement('a'); 

		if (item.thumb) {
			var div_thumb = document.createElement('div'); 
			var img = document.createElement('img'); 

			img.src = item.thumb; 
			div_thumb.className = 'thumb'; 
			div_thumb.appendChild(img); 
			ul.appendChild(div_thumb); 
		}

		if (item.artist) {
			var li_artist = document.createElement('li')

			li_artist.textContent = item.artist; 
			li_artist.className = 'artist'; 
			ul.appendChild(li_artist); 
		}

		if (item.title) {
			var li_title = document.createElement('li'); 

			li_title.textContent = item.title; 
			li_title.className = 'title';
			ul.appendChild(li_title); 
		}

		if (item.label) {
			var li_label = document.createElement('li'); 

			li_label.textContent = "Label: "+item.label; 
			li_label.className = 'label'; 
			ul.appendChild(li_label); 
		}
		
		if (item.catno) {
			var li_catno = document.createElement('li'); 

			li_catno.textContent = "Catalogue no: "+item.catno; 
			li_catno.className = 'catno'; 
			ul.appendChild(li_catno); 
		}
		
		if (item.format) {
			var li_format = document.createElement('li'); 

			li_format.textContent = "Format: "+item.format; 
			li_format.className = 'format'; 
			ul.appendChild(li_format); 
		}
  		
		/*	if (item.year) {
			var li_year = document.createElement('li'); 
	
			li_year.textContent = "Year: "+item.year; 
			li_year.className = 'year'; 
			ul.appendChild(li_year); 
		} 
	
	  		if (item.country) {
			var li_country = document.createElement('li'); 

			li_country.textContent = "Country: "+item.country; 
			li_country.className = 'country';
			ul.appendChild(li_country); 
		} */
		
		if ((item.year) || (item.country)) { 
			var li_released = document.createElement('li'); 
				if (!item.year) {
					li_released.textContent = "Country: "+item.country;
				} else if (!item.country) {
					li_released.textContent = "Released: "+dateFormatter.format(item.year);
				} else {
					li_released.textContent = "Released: "+dateFormatter.format(item.year)+", "+item.country;
				};
			li_released.className = 'released';
			ul.appendChild(li_released); 
		}

		if (item.type) {
			var li_type = document.createElement('li');
			var type_icon = document.createElement('img');
			var typeName = item.type;
			var type_icon_src = "graphics/"+typeName+"32.png";

			type_icon.setAttribute("src", type_icon_src);
			type_icon.setAttribute("alt", typeName);
			li_type.appendChild(type_icon);
			li_type.className = 'type'; 
			ul.appendChild(li_type); 
			a_primary.className = typeName; 
		} else {
			// assumes we are on a versions page
			a_primary.className = 'release'; 
		}

		a_primary.href = item.resource_url; 
		a_primary.appendChild(ul);
		li_primary.appendChild(a_primary); 
		li_primary.className = 'listing'; 
		container.appendChild(li_primary); 

		listings.push(a_primary); 
	}

	listings.forEach(function(listing) {
		listing.addEventListener(
			'click', 
			function(e) {
				e.preventDefault(); 
				
				paginator.addPage(this.href, this.className);
			}, 
			false
		)
	}); 
}