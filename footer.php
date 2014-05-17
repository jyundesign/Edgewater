


<!-- Add jQuery library -->

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="http://soekan.com/ew-site/js/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="http://soekan.com/ew-site/js/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="http://soekan.com/ew-site/js/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

<!-- Add Button helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="http://soekan.com/ew-site/js/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
<script type="text/javascript" src="http://soekan.com/ew-site/js/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

<!-- Add Thumbnail helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="http://soekan.com/ew-site/js/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
<script type="text/javascript" src="http://soekan.com/ew-site/js/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<!-- Add Media helper (this is optional) -->
<script type="text/javascript" src="http://soekan.com/ew-site/js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>


<script type="text/javascript">
  $(document).ready(function() {

    // Remove padding, set opening and closing animations, close if clicked and disable overlay
    $(".fancybox-effects-d").fancybox({
      padding: 0,

      openEffect : 'elastic',
      openSpeed  : 150,

      closeEffect : 'elastic',
      closeSpeed  : 150,

      closeClick : true

    });


  });
</script>

<script type="text/javascript">
  $(document).ready(function() {

    $("#owl-example").owlCarousel({

    // Most important owl features
    items : 5,
    itemsCustom : [
    [0, 2],
    [450, 4],
    [600, 4],
    [700, 4],
    [1000, 4],
    [1200, 4],
    [1400, 4],
    [2400, 4]
    ],
    navigation : true,

    //Basic Speeds
    slideSpeed : 200,
    paginationSpeed : 800,
    rewindSpeed : 1000,

    //Autoplay
    autoPlay : false,
    stopOnHover : false,

    // Navigation
    navigationText : ["<img src='img/arrow-left.png'>","<img src='img/arrow-right.png'>"],
    rewindNav : true,
    scrollPerPage : false,

    //Pagination
    pagination : true,
    paginationNumbers: false,

    // Responsive 
    responsive: true,
    responsiveRefreshRate : 200,
    responsiveBaseWidth: window,

    // CSS Styles
    baseClass : "owl-carousel",
    theme : "owl-theme",

    //Lazy load
    lazyLoad : false,
    lazyFollow : true,
    lazyEffect : "fade",

    //Auto height
    autoHeight : false,

    //JSON 
    jsonPath : false, 
    jsonSuccess : false,

    //Mouse Events
    dragBeforeAnimFinish : true,
    mouseDrag : true,
    touchDrag : true,

    //Transitions
    transitionStyle : false,

    // Other
    addClassActive : false,

    //Callbacks
    beforeUpdate : false,
    afterUpdate : false,
    beforeInit: false, 
    afterInit: false, 
    beforeMove: false, 
    afterMove: false,
    afterAction: false,
    startDragging : false,
    afterLazyLoad : false

  });
});
</script>
<script>
  $(document).ready(function() {
    $('.ui-close-button').click(function(){
      $(this).parents('.contentPad').fadeTo(1000,0);
      $(this).parents('.contentPad').removeClass("fade-in six");
      $('.ui-open-button').addClass("fade-in two");


    })
    $('.ui-open-button').click(function(){
      $('.contentPad').fadeTo(1000,0);
      $('.contentPad').addClass("fade-in two");
      $(this).removeClass("fade-in");

    })
  });

</script>


</body>
</html>