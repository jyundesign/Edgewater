<!-- <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js'></script> -->
<script src="http://soekan.com/edgewater/js/jquery.cycle.all.js" type="text/javascript" charset="utf-8"></script>
<script src="http://soekan.com/edgewater/js/jquery.maximage.js" type="text/javascript" charset="utf-8"></script>


<script type="text/javascript" charset="utf-8">
$(function() {
    $('#maximage').maximage({
        cycleOptions: {
            fx: 'fade',
            //sync: false,
            speed: 800,
            timeout: 8000,
        },
        onFirstImageLoaded: function() {
            $('#maximage').fadeIn('fast');
        },
        fillElement: '#heroImage',
        backgroundSize: 'cover',
        backgroundPosition:'center'
    });
});
</script>