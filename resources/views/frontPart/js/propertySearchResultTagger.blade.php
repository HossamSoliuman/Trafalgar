<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<script>
    $(document).ready(function () {

    	$("#cityListForSearchPage").select2({
    tags: true,
   // tokenSeparators: [',', ' ']
});
    	
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
    
    	$(".propertySearchButton").click(function () {
    
    		let city = $('#cityListForSearchPage').val();
    		if (city == "") {
    			toastr.error('Please enter a City, Suburb or Web Reference.');
    			return false;
    		}
    		$('.stringCity').val(city.toString());
    		$('#searchForm').submit();
    	});
    
    	$("#setSortType").change(function () {
    
    		let sortVal = $(this).val();
    		$('#sortType').val(sortVal);
    		let city = $('#cityListForSearchPage').val();
    		if (city == "") {
    			toastr.error('Please enter a City, Suburb or Web Reference.');
    			return false;
    		}
    
    		$('.stringCity').val(city.toString());
    
    		$('#searchForm').submit();
    	});
    	
    	
    	 $("#moreOptionButtonRent").click(function(){
              $("#moreAdvanceOptionSerachRent").toggleClass("moreAdvanceOptionSerachRent_view");
            });

          

            $("#resetAllForm").click(function(){
             $('.resetFormData')[0].reset();
            //  $('.resetFormData')[1].reset();
             $(".select2").val(null).trigger("change"); 
              toastr.success('reset filter successfully');
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
        	    if(multipleTownLocationArray.length > 0){
        	    	this.setCenter(new google.maps.LatLng(multipleTownLocationArray[0][1], multipleTownLocationArray[0][2]));
        	}
        		this.setZoom(12);
        		google.maps.event.removeListener(boundsListener);
        	});
        }
    
 
</script>
<script>
/*function submitForm() {
  var submitButton = document.getElementById("submitButton");
  var omrDocumentInput = document.getElementById("upload_cv");

  // Disable the submit button before starting document upload
  submitButton.disabled = true;

  var formData = new FormData();
  formData.append("upload_cv", omrDocumentInput.files[0]);

  // Simulate document upload (replace this with actual upload logic)
  setTimeout(function() {
    // After upload is complete, enable the submit button again
    submitButton.disabled = false;
  }, 20000); // Simulated upload delay, adjust as needed

  // Return false to prevent the form from submitting immediately
  return false;
}*/
</script>