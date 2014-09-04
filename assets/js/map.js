// When the window has finished loading create our google map below
google.maps.event.addDomListener(window, 'load', init);

function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 9,
        
        scrollwheel: false,

        // The latitude and longitude to center the map (always required)
        center: new google.maps.LatLng(41.363612, -81.729526), // Average locations

        // How you would like to style the map. 
        // This is where you would paste any style found on Snazzy Maps.
        styles: [{
        	featureType: 'water', 
        		stylers: [
        			{color:'#5798ba'},
        			{visibility:'on'}]	
        		},{

        	featureType:'landscape',		
        		stylers: [
        			{color:'#f2f2f2'}]
        		},{

        	featureType: 'road',		
        		stylers: [
        			{saturation:-100},
        			{lightness:35}]		
        		},{

        	featureType: 'road.highway',		
        		stylers: [
        			{visibility:'simplified'}]	
        		},{

        	featureType: 'road.arterial',		
        	elementType:'labels.icon',		
        		stylers: [
        			{visibility:'off'}]	
        		},{	

        	featureType:'administrative',		
        	elementType:'labels.text.fill',		
        		stylers: [
        			{color:'#444444'}]	
        		},{		

        	featureType:'transit',		
        		stylers: [
        			{visibility:'off'}]	
        		},{		

        	featureType:'poi',		
        		stylers: [
        			{visibility:'off'}]	
        		}]
    };

    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');

    // Create the Google Map using out element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    // Markets for locations
    /*
    5255 Regency Drive - Parma, OH 44129
	41.382385, -81.723036

	12700 Prospect Road - Strongsville, OH 44149
	41.320874, -81.858723

	3845 Pearl Road - Medina Township, OH 44256
	41.172205, -81.859871

	11000 Pleasant Valley Rd. Room G109 - Parma, OH 44130
	41.367070, -81.763869

	2900 Community College Ave. Room 88E - Cleveland, OH 44115
	41.493467, -81.669966

	4250 Richmond Road - Highland Hills Village, OH 44122
	41.445673, -81.501693

	AVG
	41.363612, -81.729526
	*/

    // Main Office
    var marker1 = new google.maps.Marker({
    position: new google.maps.LatLng(41.382385, -81.723036),
    map: map,
    icon: ''
    });

    var infowindow1 = new google.maps.InfoWindow({
    content: '<strong>Main Office</strong><br /><img src="http://placehold.it/200x120&text=Main Office Pic"><br />5255 Regency Drive<br />Parma, OH 44140<br />440.843.8300<br /><br />'
    });

    // Adding a click event to the marker
    google.maps.event.addListener(marker1, 'click', function() {
    // Calling the open method of the infoWindow
    infowindow1.open(map, marker1);
    });
    // END OF Main Office


    // Strongsville
    var marker2 = new google.maps.Marker({
    position: new google.maps.LatLng(41.320874, -81.858723),
    map: map,
    icon: ''
    });

    var infowindow2 = new google.maps.InfoWindow({
    content: '<strong>Strongsville Office</strong><br />12700 Prospect Road<br />Strongsville, OH 44149<br />440.572.3830<br />'
    });

    // Adding a click event to the marker
    google.maps.event.addListener(marker2, 'click', function() {
    // Calling the open method of the infoWindow
    infowindow2.open(map, marker2);
    });
    // END OF Strongsville


    // Medina Office
    var marker3 = new google.maps.Marker({
    position: new google.maps.LatLng(41.172205, -81.859871),
    map: map,
    icon: ''
    });

    var infowindow3 = new google.maps.InfoWindow({
    content: '<strong>Medina Office</strong><br />3845 Pearl Road<br />Medina Township, OH 44256<br />330.661.0160<br />'
    });

    // Adding a click event to the marker
    google.maps.event.addListener(marker3, 'click', function() {
    // Calling the open method of the infoWindow
    infowindow3.open(map, marker3);
    });
    // END OF Medina Office


    // Tri-C West
    var marker4 = new google.maps.Marker({
    position: new google.maps.LatLng(41.367070, -81.763869),
    map: map,
    icon: ''
    });

    var infowindow4 = new google.maps.InfoWindow({
    content: '<strong>Tri-C West</strong><br />11000 Pleasant Valley Rd. Room G109<br />Parma, OH 44130<br />216.987.5250<br />'
    });

    // Adding a click event to the marker
    google.maps.event.addListener(marker4, 'click', function() {
    // Calling the open method of the infoWindow
    infowindow4.open(map, marker4);
    });
    // END OF Tri-C West


    // 	Tri-C Metro
    var marker5 = new google.maps.Marker({
    position: new google.maps.LatLng(41.493467, -81.669966),
    map: map,
    icon: ''
    });

    var infowindow5 = new google.maps.InfoWindow({
    content: '<strong>Tri-C West</strong><br />2900 Community College Ave. Room 88E<br />Cleveland, OH 44115<br />216.987.4250<br />'
    });

    // Adding a click event to the marker
    google.maps.event.addListener(marker5, 'click', function() {
    // Calling the open method of the infoWindow
    infowindow5.open(map, marker5);
    });
    // END OF Tri-C Metro


    // 	Tri-C East
    var marker6 = new google.maps.Marker({
    position: new google.maps.LatLng(41.445673, -81.501693),
    map: map,
    icon: ''
    });

    var infowindow6 = new google.maps.InfoWindow({
    content: '<strong>Tri-C East</strong><br />4250 Richmond Road<br />Highland Hills Village, OH 44122<br />216.987.2250<br />'
    });

    // Adding a click event to the marker
    google.maps.event.addListener(marker6, 'click', function() {
    // Calling the open method of the infoWindow
    infowindow6.open(map, marker6);
    });
    // END OF Tri-C East

}