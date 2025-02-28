<script>
    
    
    $("#searchJobButton").click(function(){
      
          var username =  $('#username').val();
        
                var location =  $('#location').val();
                  var job =  $('#job').val();
                  
                //   if(username == "" && location == "" && job == ""){
                //       	toastr.error('Parameter is required for filter');
                //       return false;
                //   }
                
                //check if property type have value in input box 
                if(username ==  ""){
                    $("#username").prop('disabled', true);

                }
                 if(location ==  ""){
                    $("#location").prop('disabled', true);

                }
                 if(job ==  ""){
                    $("#job").prop('disabled', true);

                }
          $('#searchJobForm').submit();
          
      });
</script>