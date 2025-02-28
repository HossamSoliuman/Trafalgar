<script>
    
    $(document).ready(function() {    
    //     alert('asdad');
    // $('#upload_file1').bind('change', function() {
    //     var a=(this.files[0].size);
    //     alert(a);
    //     if(a < 2097152) {
    //         alert('large');
    //         return false
    //     };
    // });
    
   $("#submitReportForm").click(function(){
  
    if($("#upload_file1").val() != ""){
        var upload_file_1 =  $("#upload_file1")[0].files[0].size;
       
        if(upload_file_1 > 1048576) {
            // alert('please upload Upload file 1 image less than 1 mb');
            	toastr.error('Please ensure upload file 1 is less than 1 mb');
            return false;
        };
    }
    
    if($("#upload_file2").val() != ""){
        var upload_file_2 =  $("#upload_file2")[0].files[0].size;
        if(upload_file_2 > 1048576) {
            
            toastr.error('Please ensure upload file 2 is less than 1 mb');
            return false;
        };
    }
    
    if($("#upload_file3").val() != ""){
        var upload_file_3 =  $("#upload_file3")[0].files[0].size;
           
        if(upload_file_3 > 1048576) {
            toastr.error('Please ensure upload file 3 is less than 1 mb');
           // alert('please upload Upload file 3 imge size less than 1 mb');
            return false;
        };
    }
    
    if($("#upload_file4").val() != ""){
       
        var upload_file_4 =  $("#upload_file4")[0].files[0].size;
        if(upload_file_4 > 1048576) {
            toastr.error('Please ensure upload file 4 is less than 1 mb');
           // alert('please upload Upload file 4 image size less than 1 mb');
            return false;
        };
    }
    
    if($("#upload_file5").val() != ""){
      
        var upload_file_5 =  $("#upload_file5")[0].files[0].size;
        if(upload_file_5 > 1048576) {
            toastr.error('Please ensure upload file 5 is less than 1 mb');
            //alert('please upload Upload file 5 imge less than 1 mb');
            return false;
        };
    }
   
 $('#reportMaintenanceForm').submit();
    });
});
</script>