<script>
    $(document).ready(function() {
        $(".mobileshow").click(function() {
            var uniqueAttr = $(this).attr('data-unique');
            $(this).hide();
            $(".mobileshow-" + uniqueAttr).toggle();
        });
    });
</script>
