<script>
    
      $("#searchJobButton").click(function(){
        
          var keyword =  $('#keyword').val();
                var location =  $('#location').val();
                  var jobtype =  $('#jobtype').val();
                
                //check if property type have value in input box 
                if(keyword ==  ""){
                    $("#keyword").prop('disabled', true);

                }
                 if(location ==  ""){
                    $("#location").prop('disabled', true);

                }
                 if(jobtype ==  ""){
                    $("#jobtype").prop('disabled', true);

                }
          $('#searchJobForm').submit();
          
      });
</script>