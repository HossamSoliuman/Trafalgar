<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
 <script src="{{ asset('front/js/bootstrap-multiselect.min.js') }}"></script>
<script>

    $(document).ready(function () {
        
        /// code for show and hide price with rent and sale type when page is loaded
        $("#maxprice_rent").prop("disabled", true);
        $("#minprice_rent").prop("disabled", true);
        $('#minprice_rent_select').hide();
        $('#maxprice_ren_select').hide();
        
        $("#minprice_sale").prop("disabled", false);
        $("#maxprice_sale").prop("disabled", false);
        $('#maxprice_sale_select').show();
        $('#minprice_sale_select').show();
/// code for show and hide price with rent and sale type when page is loaded

        // select 2 code 
    	$("#cityListForSearchPage").select2({
            tags: true,
            //tokenSeparators: [',', ' ']
        });
    	// select 2 code 
    	
    	/// code for show and hide map div
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
    /// code for show and hide map div
    
    
    	$(".propertySearchButton").click(function () {
    	    
    	   
    
    		let city = $('#cityListForSearchPage').val();
    		let citycommercialdata = $("#citycommercialdata").val();
    		if (city == "") {
    			toastr.error('Please enter a City, Suburb or Web Reference.');
    			return false;
    		}
    		$('.stringCity').val(city.toString());
    		
    		
    		
    		 var ptype_rent =    $('#ptype_rent').val();
             if(ptype_rent.length > 0){
               
                
                $('.stringPropertyTypeRent').val(ptype_rent.toString());

            }
              
              
    		var getstype = 	$('#stype').val();
    	
    		if(getstype == "for rent"){
               
             getSerachForCommercialRentForm(city,citycommercialdata);
             
    	    
    		}
    	    if(getstype == "for sale"){
    	          
    	getSerachForCommercialSaleForm(city,citycommercialdata)
    	    return false;
    	    
    		}
    		
    		
             
       
    		
    		//$('#searchForm').submit();
    	});
    
    	$("#setSortType").change(function () {
    
    		let sortVal = $(this).val();
    		$('#sortType').val(sortVal);
    		let city = $('#cityListForSearchPage').val();
    		let citycommercialdata = $("#citycommercialdata").val();
    		if (city == "") {
    			toastr.error('Please enter a City, Suburb or Web Reference.');
    			return false;
    		}
    
    		$('.stringCity').val(city.toString());
    		
    		 let ptype_rent =    $('#ptype_rent').val();
             if(ptype_rent.length > 0){
               
                
                     $('.stringPropertyTypeRent').val(ptype_rent.toString());

                }
  var getstype = 	$('#stype').val();
    	
    		if(getstype == "for rent"){
               
             getSerachForCommercialRentForm(city,citycommercialdata);
             
    	    
    		}
    	    if(getstype == "for sale"){
    	          
    		  getSerachForCommercialSaleForm(city,citycommercialdata)
    	    return false;
    	    
    		}
    		    
    	});
    	
    	
    	
        getData();

    	
    	
    	 $("#moreOptionButtonRent").click(function(){
              $("#moreAdvanceOptionSerachRent").toggleClass("moreAdvanceOptionSerachRent_view");
            });

          

            $("#resetAllForm").click(function(){
             $('.resetFormData')[0].reset();
            //  $('.resetFormData')[1].reset();
             $("#cityListForSearchPage").val(null).trigger("change"); 
               $("#ptype_rent").multiselect( 'refresh' );
              toastr.success('reset filter successfully');
            });
            
            
            
             $('#ptype_rent').multiselect({		
		nonSelectedText: 'Property Type'				
	});
	
	/// code for show and hide price with rent and sale type when page is loaded
	$("#stype").change(function () {
   
    let getStype = $(this).val();
    $('#setStype').val(getStype);
    if(getStype == "for rent"){
          $("#maxprice_rent").prop("disabled", false);
         $("#minprice_rent").prop("disabled", false);
          $('#minprice_rent_select').show();
           $('#maxprice_ren_select').show();
           
        $("#minprice_sale").prop("disabled", true);
         $("#maxprice_sale").prop("disabled", true);
          $('#maxprice_sale_select').hide();
           $('#minprice_sale_select').hide();
          
         
    }
    if(getStype == "for sale"){
        $("#minprice_sale").prop("disabled", false);
         $("#maxprice_sale").prop("disabled", false);
          $('#maxprice_sale_select').show();
           $('#minprice_sale_select').show();
           
        $("#maxprice_rent").prop("disabled", true);
         $("#minprice_rent").prop("disabled", true);
          $('#minprice_rent_select').hide();
           $('#maxprice_ren_select').hide();
    }
    
   
    	});
    	
   function getSerachForCommercialSaleForm(city,citycommercialdata){
    	     $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'get',
                url:"{{ route('commercial-property-sale.getprovience') }}",
                data:{city:city,citycommercialdata:citycommercialdata},
                dataType : 'json',
                async : false,
                success:function(data){
             if(data.status == "property_not_avaliable"){
                      	toastr.error('Property not found');
                      	return false;
                    }
            // console.log(data);
            // return false;
            
              disableBlankInputField();
               var minprice_sale =   $('#minprice_sale').val();
               var maxprice_sale =   $('#maxprice_sale').val();
                if(minprice_sale ==  ""){
                    $("#minprice_sale").prop('disabled', true);

                }
                 if(maxprice_sale ==  ""){
                    $("#maxprice_sale").prop('disabled', true);

                }
              
                    console.log(data.customUrl);
                    console.log(data);
                    if(data.status == "contain_property_id"){
                         window.location.replace(data.customUrl);
                    }
                    
                    if(data.status == "single_city_name"){
                        $('#searchForm').attr('action', data.customUrl);
                        $('#searchForm').submit();
                    }
                     
                    if(data.status == "multiple_city_name"){
                        $('#searchForm').attr('action', data.customUrl);
                        $('#searchForm').submit();
                    }
               }
            });
    	}
    	
    	function getSerachForCommercialRentForm(city,citycommercialdata){
    	     $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'get',
                url:"{{ route('commercial-property-rent.getprovience') }}",
                data:{city:city,citycommercialdata:citycommercialdata},
                dataType : 'json',
                async : false,
                success:function(data){
                    
                     if(data.status == "property_not_avaliable"){
                      	toastr.error('Property not found');
                      	return false;
                    }
            
            // console.log(data);
            // return false;
            
              disableBlankInputField();
               var minprice_rent =   $('#minprice_rent').val();
               var maxprice_rent =   $('#maxprice_rent').val();
                if(minprice_rent ==  ""){
                    $("#minprice_rent").prop('disabled', true);

                }
                 if(maxprice_rent ==  ""){
                    $("#maxprice_rent").prop('disabled', true);

                }
              
                    console.log(data.customUrl);
                    console.log(data);
                    if(data.status == "contain_property_id"){
                         window.location.replace(data.customUrl);
                    }
                    
                    if(data.status == "single_city_name"){
                        $('#searchForm').attr('action', data.customUrl);
                        $('#searchForm').submit();
                    }
                     
                    if(data.status == "multiple_city_name"){
                        $('#searchForm').attr('action', data.customUrl);
                        $('#searchForm').submit();
                    }
               }
            });
    	}
    	
    	
    	
    function disableBlankInputField(){
    	       var stringPropertyTypeRent =   $('#stringPropertyTypeRent').val();
            //   var minprice_rent =   $('#minprice_rent').val();
            //   var maxprice_rent =   $('#maxprice_rent').val();
                var beds_rent =  $('#beds_rent').val();
               var bath_rent =   $('#bath_rent').val();
                var garage_rent =  $('#garage_rent').val();
               var prkng_rent =   $('#prkng_rent').val();
                var fminsize_rent =  $('#fminsize_rent').val();
                var fmaxsize_rent =  $('#fmaxsize_rent').val();
                //check if property type have value in input box 
                if(stringPropertyTypeRent ==  ""){
                    $("#stringPropertyTypeRent").prop('disabled', true);

                }
                //  if(minprice_rent ==  ""){
                //     $("#minprice_rent").prop('disabled', true);

                // }
                //  if(maxprice_rent ==  ""){
                //     $("#maxprice_rent").prop('disabled', true);

                // }
                 if(beds_rent ==  ""){
                    $("#beds_rent").prop('disabled', true);

                }
                  if(bath_rent ==  ""){
                    $("#bath_rent").prop('disabled', true);

                }
                  if(garage_rent ==  ""){
                    $("#garage_rent").prop('disabled', true);

                }
                  if(prkng_rent ==  ""){
                    $("#prkng_rent").prop('disabled', true);

                }
                  if(fminsize_rent ==  ""){
                    $("#fminsize_rent").prop('disabled', true);

                }
                if(fmaxsize_rent ==  ""){
                    $("#fmaxsize_rent").prop('disabled', true);

                }
    	}
    	
    	
    
    	

    });
      /// code for show and hide price with rent and sale type when page is loaded
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
        	script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyDFxIh8LLG3npkRjS4hGeFRthWa0KQq3ts&callback=initialize";
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
        
         function getData(){
           var data = $('#cityListForSearchPage').select2('data'); 
          // alert(data);
           var array = "";
            data.forEach(function (item) { 
                array = array+"@@"+$.trim(item.text.replace(", ", ",")); 
            })
            $("#citycommercialdata").val(array);
        }  
    
    
</script>