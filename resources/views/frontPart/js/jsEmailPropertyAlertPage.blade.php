<script>

function ucwords (str) {
    return (str + '').replace(/^([a-z])|\s+([a-z])/g, function ($1) {
        return $1.toUpperCase();
    });
}


   $('.forSalePriceList').hide();
   $('#minpriceSale').prop('required', false);
        $('#maxpriceSale').prop('required', false);
    $('#property_for').on('change', function() {
  
  if(this.value == "for rent"){
      $('.toRentPriceList').show();
      $('.forSalePriceList').hide();
       $('#minpriceSale').prop('required', false);
        $('#maxpriceSale').prop('required', false);
         $('#minpriceRent').prop('required', true);
        $('#maxpriceRent').prop('required', true);
  }
  if(this.value == "for sale"){
      $('.forSalePriceList').show();
      $('.toRentPriceList').hide();
       $('#minpriceSale').prop('required', true);
        $('#maxpriceSale').prop('required', true);
         $('#minpriceRent').prop('required', false);
        $('#maxpriceRent').prop('required', false);
  }
});


 $('#region').on('change', function() {
    
     var cityName = $(this).val();
     	let html = "";
     if(cityName !=""){
         $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
           type:'get',
           url:"{{ route('get-suburb-dynamic-by-town') }}",
           data:{city:cityName},
           dataType : 'json',
            async : false,
           success:function(data){
             //console.log(data);
            // console.log(data);
            
          if (data.length > 0) {
			
				$.each(data, function (index, getSetName) {
				    
				    html += '<option value="'+ getSetName.suburb +'">'+ ucwords(getSetName.suburb)+'</option>';
				
				});
			
			
			
			}else{
			     html += '<option value="">Please select</option>';
			}
            	$('#suburg').html(html);
           }
        });
     }else{
          html += '<option value="">Please select</option>';
          	$('#suburg').html(html);
     }
 });
</script>