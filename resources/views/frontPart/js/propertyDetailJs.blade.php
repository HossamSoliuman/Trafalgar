
 <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    
      <script>
        $(document).ready(function() {
          var sync1 = $("#sync1");
          var sync2 = $("#sync2");
         
          sync1.owlCarousel({
            singleItem : true,
            autoPlay : true,
            slideSpeed : 1000,
            navigation: true,
            pagination:false,
            afterAction : syncPosition,
            responsiveRefreshRate : 200,
            navigationText: [
                '<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>',
                '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'
            ]
          });
         
          sync2.owlCarousel({
            items : 7,
            itemsDesktop      : [1199,7],
            itemsDesktopSmall     : [979,6],
            itemsTablet       : [768,5],
            itemsMobile       : [479,4],
            pagination:false,
            responsiveRefreshRate : 100,
            afterInit : function(el){
              el.find(".owl-item").eq(0).addClass("synced");
            }
          });
         
          function syncPosition(el){
            var current = this.currentItem;
            $("#sync2")
              .find(".owl-item")
              .removeClass("synced")
              .eq(current)
              .addClass("synced")
            if($("#sync2").data("owlCarousel") !== undefined){
              center(current)
            }
          }
         
          $("#sync2").on("click", ".owl-item", function(e){
            e.preventDefault();
            var number = $(this).data("owlItem");
            sync1.trigger("owl.goTo",number);
          });
         
          function center(number){
            var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
            var num = number;
            var found = false;
            for(var i in sync2visible){
              if(num === sync2visible[i]){
                var found = true;
              }
            }
         
            if(found===false){
              if(num>sync2visible[sync2visible.length-1]){
                sync2.trigger("owl.goTo", num - sync2visible.length+2)
              }else{
                if(num - 1 === -1){
                  num = 0;
                }
                sync2.trigger("owl.goTo", num);
              }
            } else if(num === sync2visible[sync2visible.length-1]){
              sync2.trigger("owl.goTo", sync2visible[1])
            } else if(num === sync2visible[0]){
              sync2.trigger("owl.goTo", num-1)
            }
          }
        });
    </script>
    <script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
 <script>
    
        var propertyArray = <?php if(!empty($propertyDetail)){echo json_encode($propertyDetail); }else{ []; } ?>;
 
        var multipleTownLocationArray = [];
        var multipleTownDetailArray = [];
        
        // $(propertyArray.data).each(function(index, element) {
       
       
        	var singleTownLocationArray = [propertyArray.town, propertyArray.location_lat, propertyArray.location_long];
        	var singleTownDetailArray = ['<div class="info_content">' + '<h5>' + propertyArray.headline + '</h5>' + '<img width="200px" height="150px" src="' + propertyArray.photo_thumbnail + '">' + '<p>' + propertyArray.description + '</p>' + '</div>'];
        	
        	//console.log("singleTownLocationArray="+singleTownLocationArray);
        	
        	multipleTownLocationArray.push(singleTownLocationArray);
        	multipleTownDetailArray.push(singleTownDetailArray);
        	
        	
        // });
        
        jQuery(function($) {
            
        	// Asynchronously Load the map API 
        	var script = document.createElement('script');
        	script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyDFxIh8LLG3npkRjS4hGeFRthWa0KQq3ts&callback=initialize";
        	document.body.appendChild(script);
        	
        	
        });
        
        function initialize() {
            
            
        
        	
        	if (!propertyArray.location_long || !propertyArray.location_lat)
        	{
        	    let address = propertyArray.street_name + ' ' + propertyArray.street_number + ' ' + propertyArray.town + ', ' + propertyArray.province + ', ' + propertyArray.country;
        	    console.log(address);
        	    
        	    var geocoder = new google.maps.Geocoder();
                geocoder.geocode( { 'address': address}, function(results, status) {
                  if (status == google.maps.GeocoderStatus.OK)
                  {
                      
                      
                      console.log(results[0].geometry.location)
                      var lat = results[0].geometry.location.lat();
                      var lon = results[0].geometry.location.lng()
                      
                        multipleTownLocationArray = [];
                        multipleTownDetailArray = [];
                      
                      	var singleTownLocationArray = [propertyArray.town, lat, lon];
                    	var singleTownDetailArray = ['<div class="info_content">' + '<h5>' + propertyArray.headline + '</h5>' + '<img width="200px" height="150px" src="' + propertyArray.photo_thumbnail + '">' + '<p>' + propertyArray.description + '</p>' + '</div>'];
                    	
                    	//console.log("singleTownLocationArray="+singleTownLocationArray);
                    	
                    	multipleTownLocationArray.push(singleTownLocationArray);
                    	multipleTownDetailArray.push(singleTownDetailArray);
                    	
                    	setMap();
                  }
                });
        	} else {
                      console.log("foo");
                      setMap();
                  }
        	
        	
        	
        	
        	
        }
        
        function setMap()
        {
            
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
        	
        //	console.log("markers="+markers);
        	//console.log("infoWindowContent="+infoWindowContent);
        
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
    
    $(".mobileshow1").click(function(){
        $(".mobileshow2").show();
         $(".mobileshow1").hide();
    })
    
    var countDiv = 0; 
    $(document).on('click', '.addOccupantsDiv', function(){
        
  var html = '<div id="divCountNumber'+countDiv+'"><h4>Occupants:</h4><div class="field_row" ><div class="form-group"><label for="occupants_no_of_person_occupy_unit'+countDiv+'">No. of Persons to Occupy Unit:<span>*</span></label> <input type="text" class="form-control" name="occupants_no_of_person_occupy_unit[]" id="occupants_no_of_person_occupy_unit'+countDiv+'"> </div> <div class="form-group"> <label for="occupants_id_no'+countDiv+'">ID No:<span>*</span></label> <input type="text" class="form-control" name="occupants_id_no[]" id="occupants_id_no'+countDiv+'"> </div> <div class="form-group"> <label for="occupants_gender'+countDiv+'">Male / Female:<span>*</span></label> <div class="icon_select"> <select id="occupants_gender'+countDiv+'" class="form-control" name="occupants_gender[]"> <option name="Male">Male</option> <option name="Female">Female</option> </select> </div> </div> <div class="form-group"> <label for="occupants_title'+countDiv+'">Title:<span>*</span></label> <div class="icon_select"> <select id="occupants_title'+countDiv+'" class="form-control" name="occupants_title[]"> <option value="Dr.">Dr.</option> <option value="Mr." >Mr.</option> <option value="Mrs." >Mrs.</option> <option value="Miss." >Miss.</option> </select> </div> </div> <div class="form-group"> <label for="occupants_name'+countDiv+'">Name:<span>*</span></label> <input type="text" class="form-control" id="occupants_name'+countDiv+'" name="occupants_name[]"> </div> <div class="form-group"> <label for="occupants_surname'+countDiv+'">surname:<span>*</span></label> <input type="text" class="form-control" id="occupants_surname'+countDiv+'" name="occupants_surname[]"> </div> <div class="form-group"> <label for="occupants_cell_no'+countDiv+'">Cell No:<span>*</span></label> <input type="number" class="form-control" id="occupants_cell_no'+countDiv+'" name="occupants_cell_no[]"> </div> <div class="form-group"> <label for="occupants_work_tel_no'+countDiv+'">Work Tel No:<span>*</span></label> <input type="number" class="form-control" name="occupants_work_tel_no[]" id="occupants_work_tel_no'+countDiv+'"> </div> <div class="form-group"> <label for="occupants_email'+countDiv+'">Email Address:<span>*</span></label> <input type="email" class="form-control" name="occupants_email[]" id="occupants_email'+countDiv+'"> </div></div><button data-id="'+countDiv+'" id="removeOccupantsButton'+countDiv+'" type="button" class="other_buttons mb-3 removeOccupantsAction">Remove Occupants</button>';
  
 
  countDiv++;
  $('#occupants_div').append(html);
 });
 
 $(document).on('click', '.removeOccupantsAction', function(){
    var dataId =  $(this).data('id');
  
  $('#divCountNumber'+dataId).remove();
 });
    
    
      var countDivFiles = 0; 
    $(document).on('click', '.addMoreFiles', function(){
        
  var htmlFile = '<div id="UniqueIdForFiles'+countDivFiles+'"><div  class="field_row my-3"><div class="form-group"><input type="file" class="form-control" name="supporting_documents[]"></div></div><button data-id="'+countDivFiles+'" id="removeFilesButton'+countDivFiles+'" type="button" class="other_buttons mb-3 removeFilesAction">Remove Files</button></div>';
  
 
  countDivFiles++;
  $('#appendDocumentField').append(htmlFile);
 });
    
   $(document).on('click', '.removeFilesAction', function(){
    var dataIdRemove =  $(this).data('id');
  
  $('#UniqueIdForFiles'+dataIdRemove).remove();
 }); 
 
 
 
 $(document).on('click', '#shareOnSocialModel', function(e){
     e.preventDefault();
      $('#socialLinksModal').modal('toggle');
 });
 
 
  $(document).on('click', '#shareLinkWithEmail', function(e){
     e.preventDefault();
      $('#shareLinkWithEmailModal').modal('toggle');
       $('#socialLinksModal').modal('toggle');
 });
 
 

    
</script>