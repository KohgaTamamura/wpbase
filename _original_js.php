<?php
/*
Template Name: Js Sample
*/

get_header(); ?>


  <div class="container">

    <div class="row bb">
      <div class="c12 columns">
        <h1>js plugins</h1>
      </div>
    </div>

  <?php include('_original_js_parts/flickity.php' ); ?>
  <?php include('_original_js_parts/lazyload.php' ); ?>
  <?php include('_original_js_parts/tab.php' ); ?>
  <?php include('_original_js_parts/photoswipe.php' ); ?>

  </div>


<?php get_footer(); ?>
