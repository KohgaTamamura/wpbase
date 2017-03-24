<div class="row">
<div class="c12 columns">
  <h2 >Flickity Image Slider</h2>
  <p><a href="http://flickity.metafizzy.co/">http://flickity.metafizzy.co/</a></p>
</div>
  <div class="c12 columns main-carousel">
    <div class="carousel-cell" data-flickity-bg-lazyload="http://dummyimage.com/800x600/4d494d/686a82.gif&text=img1"></div>
    <div class="carousel-cell" data-flickity-bg-lazyload="http://dummyimage.com/801x601/4d494d/686a82.gif&text=img2"></div>    
    <div class="carousel-cell" data-flickity-bg-lazyload="http://dummyimage.com/802x602/4d494d/686a82.gif&text=img3"></div>
    <div class="carousel-cell" data-flickity-bg-lazyload="http://dummyimage.com/803x603/4d494d/686a82.gif&text=img4"></div>
  </div>

  <script src="<?php echo get_template_directory_uri(); ?>/cmn/js/vendar/flickity.pkgd.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/cmn/js/vendar/bg-lazyload.js"></script>

  <script type="text/javascript">

    $('.main-carousel').flickity({
      // options
      cellAlign: 'center',
      contain: true,
      lazyLoad: true,
      bgLazyLoad: true,
      bgLazyLoad: 1
    });

  </script>

</div>