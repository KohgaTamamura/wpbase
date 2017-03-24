<?php
/**
*/

get_header(); ?>

  <div class="container">

    <div class="row">
      <div class="c12 columns">


		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			echo the_title();
			echo the_date();
			echo the_content();

			$all_data = SCF::gets();
			if($all_data):
				print_r($all_data);
			endif;

		endwhile;
		?>

      </div>
    </div>

  </div><!-- container -->

<?php get_footer(); ?>
