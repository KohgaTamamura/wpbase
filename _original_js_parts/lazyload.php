<div class="row">
<div class="c12 columns">

<h3>Lazy Load</h3>
<p><a href="https://www.appelsiini.net/projects/lazyload"></a></p>

<img class="lazy" data-original="http://dummyimage.com/2000x1000/4d494d/686a82.gif&text=Lazy Load" />

  <script src="<?php echo get_template_directory_uri(); ?>/cmn/js/vendar/lazyload.js"></script>

  <script type="text/javascript">
    $(function(){
      $("img.lazy").lazyload({
          effect : "fadeIn"
      });
    });
  </script>

</div>
</div>