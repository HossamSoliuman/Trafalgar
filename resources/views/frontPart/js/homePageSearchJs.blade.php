
  <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
 <script src="{{ asset('front/js/bootstrap-multiselect.min.js') }}"></script>
 <script>
   
         
         $(document).ready(function() {
         
            /// tagger data for rent search
            $("#cityrent").select2({
			  data:<?php echo  json_encode($getSearchTaggerData) ?>,
			  multiple: true,
			  placeholder: 'Enter a province, city or suburb or Web Reference. Multiple areas may be entered.',
			  tags: true,
			  //tokenSeparators: [",", " "]
            }); 
            
            $("#cityrent").val(null).trigger('change');
             /// tagger data for rent search
            
            
            
             /// tagger data for sale search
              $("#citysale").select2({
			  data:<?php echo  json_encode($getSearchTaggerData) ?>,
			  multiple: true,
			  placeholder: 'Enter a province, city or suburb or Web Reference. Multiple area may be entered.',
			  tags: true,
			  //tokenSeparators: [",", " "]
            }); 
            
            $("#citysale").val(null).trigger('change');
            
            /// tagger data for sale search
            
            
            
   
        $(".submitSearchData").click(function(e){
            e.preventDefault();
            
            let cityrentdata = $("#cityrentdata").val();
            //alert(cityrentdata);
            
            let citydata = $(this).data('citydata');
            let city = $('#'+citydata).val();
            if(city == ""){
                toastr.error('Please enter a City, Suburb or Web Reference.');
                return false;
            }
            
            // get proprty type value and convert into string
             var ptype_rent =    $('#ptype_rent').val();
             if(ptype_rent !=  ""){
                
                     $('.stringPropertyTypeRent').val(ptype_rent.toString());

                }
            
            let formtype = $(this).data('formtype');
            $('.stringCity').val( city.toString());
            
           ///new code for tagger search for rent ////
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'get',
                url:"{{ route('get-rent.getprovience') }}",
                data:{city:city,cityrentdata:cityrentdata},
                dataType : 'json',
                async : false,
                success:function(data){
            
            // console.log(ptype_rent);
            // return false;
             if(data.status == "property_not_avaliable"){
                      	toastr.error('Property not found');
                      	return false;
                    }
            
            var stringPropertyTypeRent =   $('#stringPropertyTypeRent').val();
               var minprice_rent =   $('#minprice_rent').val();
               var maxprice_rent =   $('#maxprice_rent').val();
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
                 if(minprice_rent ==  ""){
                    $("#minprice_rent").prop('disabled', true);

                }
                 if(maxprice_rent ==  ""){
                    $("#maxprice_rent").prop('disabled', true);

                }
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
              
                    // console.log(data.customUrl);
                    // console.log(data);
                    if(data.status == "contain_property_id"){
                         window.location.replace(data.customUrl);
                    }
                    
                    if(data.status == "single_city_name"){
                        $('#formRentTypeSubmit').attr('action', data.customUrl);
                        $('#formRentTypeSubmit').submit();
                    }
                     
                    if(data.status == "multiple_city_name"){
                        $('#formRentTypeSubmit').attr('action', data.customUrl);
                        $('#formRentTypeSubmit').submit();
                    }
               }
            });
            return false;
              ///new code for tagger search for rent ////
           
            });
            
    ////////////////////////// event for sale property search ////////////////
            $(".submitFormForSaleProperty").click(function(e){
            e.preventDefault();
           // let citydata = $(this).data('citydata');
           
            let city = $('#citysale').val();
            let citysaledata = $("#citysaledata").val();
            if(city == ""){
                toastr.error('Please enter a City, Suburb or Web Reference.');
                return false;
            }
            
            // get proprty type value and convert into string
             var ptype_sale =    $('#ptype_sale').val();
             if(ptype_sale !=  ""){
                
                     $('.stringPropertyTypeSale').val(ptype_sale.toString());

                }
            
           // let formtype = $(this).data('formtype');
            $('.stringCitySale').val( city.toString());
            
           ///new code for tagger search for rent ////
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'get',
                url:"{{ route('get-sale.getprovience') }}",
                data:{city:city,citysaledata:citysaledata},
                dataType : 'json',
                async : false,
                success:function(data){
            
            // console.log(ptype_rent);
            // return false;
            
            var stringPropertyTypeSale =   $('#stringPropertyTypeSale').val();
               var minprice_sale =   $('#minprice_sale').val();
               var maxprice_sale =   $('#maxprice_sale').val();
                var beds_sale =  $('#beds_sale').val();
               var bath_sale =   $('#bath_sale').val();
                var garage_sale =  $('#garage_sale').val();
               var prkng_sale =   $('#prkng_sale').val();
                var fminsize_sale =  $('#fminsize_sale').val();
                var fmaxsize_sale =  $('#fmaxsize_sale').val();
                //check if property type have value in input box 
                if(stringPropertyTypeSale ==  ""){
                    $("#stringPropertyTypeSale").prop('disabled', true);

                }
                 if(minprice_sale ==  ""){
                    $("#minprice_sale").prop('disabled', true);

                }
                 if(maxprice_sale ==  ""){
                    $("#maxprice_sale").prop('disabled', true);

                }
                 if(beds_sale ==  ""){
                    $("#beds_sale").prop('disabled', true);

                }
                  if(bath_sale ==  ""){
                    $("#bath_sale").prop('disabled', true);

                }
                  if(garage_sale ==  ""){
                    $("#garage_sale").prop('disabled', true);

                }
                  if(prkng_sale ==  ""){
                    $("#prkng_sale").prop('disabled', true);

                }
                  if(fminsize_sale ==  ""){
                    $("#fminsize_sale").prop('disabled', true);

                }
                if(fmaxsize_sale ==  ""){
                    $("#fmaxsize_sale").prop('disabled', true);

                }
                
                
                
              
                    // console.log(data.customUrl);
                    // console.log(data);
                    if(data.status == "contain_property_id"){
                         window.location.replace(data.customUrl);
                    }
                    
                    if(data.status == "single_city_name"){
                        $('#formSaleTypeSubmit').attr('action', data.customUrl);
                        $('#formSaleTypeSubmit').submit();
                    }
                     
                    if(data.status == "multiple_city_name"){
                        $('#formSaleTypeSubmit').attr('action', data.customUrl);
                        $('#formSaleTypeSubmit').submit();
                    }
               }
            });
            return false;
              ///new code for tagger search for rent ////
           
            });
    /////////////////////////// event for sale property search /////////////////
            
            $("#moreOptionButtonRent").click(function(){
              $("#moreAdvanceOptionSerachRent").toggleClass("moreAdvanceOptionSerachRent_view");
            });

            $("#moreOptionButtonSale").click(function(){
              $("#moreAdvanceOptionSerachSale").toggleClass("moreAdvanceOptionSerachSale_view");
            });
            
             $("#moreOptionButtonCommercial").click(function(){
              $("#moreAdvanceOptionSerachCommercial").toggleClass("moreAdvanceOptionSerachCommercial_view");
            });
           

            $("#resetAllForm").click(function(){
              
             $('.resetFormData')[0].reset();
             $('.resetFormData')[1].reset();
            //   $('.resetFormData')[2].reset();
            
             $("#cityrent").val(null).trigger("change"); 
              $("#citysale").val(null).trigger("change"); 
            //   $(".select2").val(null).trigger("change"); 
            $("#ptype_rent").multiselect( 'refresh' );
             $("#ptype_sale").multiselect( 'refresh' );
              toastr.success('reset filter successfully');
            });
            
            
             $('#ptype_rent').multiselect({		
		nonSelectedText: 'Property Type'				
	});
	
	    $('#ptype_sale').multiselect({		
		nonSelectedText: 'Property Type'				
	});

        });
        
       
        
       function getData(){
           var data = $('#cityrent').select2('data'); 
           var array = "";
            data.forEach(function (item) { 
                array = array+"@@"+$.trim(item.text.replace(", ", ",")); 
            })
            $("#cityrentdata").val(array);
       }
        
        function getData1(){
            
           var data = $('#citysale').select2('data'); 
           
           var array = "";
            data.forEach(function (item) { 
                array = array+"@@"+$.trim(item.text.replace(", ", ",")); 
            })
            $("#citysaledata").val(array);
        }  
     </script>