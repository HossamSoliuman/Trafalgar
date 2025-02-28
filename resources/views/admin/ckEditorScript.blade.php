<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    
      $(document).ready(function() {
            
          
             CKEDITOR.replace( 'description', {
        filebrowserUploadUrl: "{{route('admin.news.ckimageupload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form',
        // filebrowserBrowseUrl: '{{ asset("/storage/uploadss/") }}',
    });
  
      }); 
</script>