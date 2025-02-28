<script>
    
    $("#page_title").keyup(function(){
        
  var grapTitle = $(this).val();
 
   var getSlug = slugify(grapTitle);
   $('#page_url_name').val(getSlug);
      

});
 
function slugify(content) {
	return content.toLowerCase().replace(/ /g,'-').replace(/[^\w-]+/g,'');
}


    
    
</script>