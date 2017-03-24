<?php
/**
 */

get_header(); ?>

<div class="container">

	<div class="row">
		<div class="c12 columns">


			<?php if ( have_posts() ) : ?>

				<?php
			// Start the Loop.

				while ( have_posts() ) : the_post();

				echo the_title();
				echo the_date();
				echo the_content();

				$all_data = SCF::gets();
				if($all_data):
					print_r($all_data);
				endif;

			// End the loop.
				endwhile;
				?>

			<?php endif; ?>

		</div>
	</div>

</div><!-- container -->

<?php get_footer(); ?>
