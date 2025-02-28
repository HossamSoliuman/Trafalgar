<script>
    $(document).ready(function () {

    
    	
    	$("#showMapDiv").click(function (e) {
    		e.preventDefault();
    		$("#mapping_view").toggle();
    		$("#showPropertyList").toggle();
    	});
    
    	$("#showListDiv").click(function (e) {
    		e.preventDefault();
    		$("#mapping_view").toggle();
    		$("#showPropertyList").toggle();
    	});
    
    
    
    	$("#setSortType").change(function () {
            var currentValue =   $('#currentValue').val();
             var currentPage =   $('#currentPage').val();
             if(currentPage != ''){
               currentValue =   currentValue+"&page="+currentPage;
             }
             
    		let sortVal = $(this).val();
    		window.location.href = currentValue+"&sortType="+sortVal;
    	
    	});
    	
    	
    

          

           

    });
      
</script>

 <script>
    
        var propertyArray = <?php if(!empty($propertyDatas)){echo json_encode($propertyDatas); }else{ []; } ?>;
    
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
        	script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyB5jU4_XhnVvBV5wx1sWMGfAnyRRGhFdWE&callback=initialize";
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
        	     if(multipleTownLocationArray){
        	    	this.setCenter(new google.maps.LatLng(multipleTownLocationArray[0][1], multipleTownLocationArray[0][2]));
        	}
        		this.setZoom(12);
        		google.maps.event.removeListener(boundsListener);
        	});
        }
    
    
</script>