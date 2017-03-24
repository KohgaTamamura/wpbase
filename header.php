<?php ?>


<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <?php wp_head(); ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="">

  <meta property="og:title" content="">
  <meta property="og:site_name" content="">
  <meta property="og:type" content="website">
  <meta property="og:url" content="/">
  <meta property="og:description" content="">
  <meta property="og:image" content="imgs/ogimg.png"><!--  1200 x 630 -->


  <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/cmn/js/main.js"></script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/cmn/css/main.css" type="text/css" media="all">


	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->


</head>


<body <?php body_class(); ?>>

<?php get_template_part( 'navigation' ); ?>
