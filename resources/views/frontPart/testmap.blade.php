<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>Google Maps Multiple Marker(Pins) Javascript </title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
      <script
         src="https://code.jquery.com/jquery-3.4.1.min.js"
         integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
         crossorigin="anonymous"></script>
      <style>
         .container{
         padding: 2%;
         text-align: center;
         } 
         #map_wrapper_div {
         height: 400px;
         }
         #map_tuts {
         width: 100%;
         height: 100%;
         }
      </style>
   </head>
   <body>
      <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="alert alert-success">
               <h2>Google Maps Multiple Marker(Pins) Javascript</h2>
            </div>
            <div id="map_wrapper_div">
               <div id="map_tuts"></div>
            </div>
         </div>
      </div>
        {{ $propertyDatas->links() }}
      </div>
      <script>
    
        var propertyArray = <?php if(!empty($propertyDatas)){echo json_encode($propertyDatas); }else{ []; } ?>;
        
        // console.log(propertyArray);
        var multipleTownLocationArray = [];
        var multipleTownDetailArray = [];
        
        $(propertyArray.data).each(function(index, element) {
       
       
        	var singleTownLocationArray = [element.town, element.location_lat, element.location_long];
        	var singleTownDetailArray = ['<div class="info_content">' + '<h6>' + element.headline + '</h6>' + '<img width="200px" height="150px" src="' + element.photo_thumbnail + '">' + '<p>' + element.description.substr(0, 50) + '</p>' + '</div>'];
        	
        	multipleTownLocationArray.push(singleTownLocationArray);
        	multipleTownDetailArray.push(singleTownDetailArray);
        	
        });
        
        jQuery(function($) {
            
        	// Asynchronously Load the map API 
        	var script = document.createElement('script');
        	script.src = "https://maps.googleapis.com/maps/api/js?sensor=false&callback=initialize";
        	document.body.appendChild(script);
        	
        });
        
        function initialize() {
            
        	var map;
        	var bounds = new google.maps.LatLngBounds();
        	var mapOptions = {
        		mapTypeId: 'roadmap'
        	};
        	
        	
        	// Display a map on the page
        	map = new google.maps.Map(document.getElementById("map_tuts"), mapOptions);
        	map.setTilt(0);
        	
        	// Multiple Markers
        	var markers = multipleTownLocationArray;
        	var infoWindowContent = multipleTownDetailArray;
        
        	// Display multiple markers on a map
        	var infoWindow = new google.maps.InfoWindow(),
        		marker, i;
        		
        	// Loop through our array of markers & place each one on the map  
        	for(i = 0; i < markers.length; i++) {
        		var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        		bounds.extend(position);
        		marker = new google.maps.Marker({
        			position: position,
        			map: map,
        			title: markers[i][0]
        		});
        		
        		// Each marker to have an info window    
        		google.maps.event.addListener(marker, 'click', (function(marker, i) {
        			return function() {
        				infoWindow.setContent(infoWindowContent[i][0]);
        				infoWindow.open(map, marker);
        			}
        		})(marker, i));
        		
        		// Automatically center the map fitting all markers on the screen
        		map.fitBounds(bounds);
        	}
        	
        	
        	// Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
        	var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        		this.setZoom(10);
        		google.maps.event.removeListener(boundsListener);
        	});
        }
    
    
</script>

<!--https://www.tutsmake.com/add-show-multiple-markers-pins-on-google-map/-->

    </body>
</html>