<?php
	get_template_part( 'templates/footer/index' );
	wp_footer();
?>
<script>
 jQuery('.client').owlCarousel({
	 margin: 15,
  loop: false, 
  nav: true,
  dots:false,
  navText: [
    "<i class='fa fa-angle-left' ></i>",
    "<i class='fa fa-angle-right'></i>"
  ],
  autoplay: false,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1000: {
      items: 4
    }
  }
})
  
 </script>
<style>
div#loader_footer {
    position: fixed;
    top: 50%;
    left: 50%;
    z-index: 999999;
    transform: translate(-50%,-50% );
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.2);
    display: flex;
    align-items: center;
    justify-content: center;
}
</style>
<div id='loader_footer' style='display: none;'>
	<img src='<?php echo get_template_directory_uri();?>/loader.gif' width='60px' height='60px'>
</div>
</body>
</html>
