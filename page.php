<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Heisenberg
 */

get_header(); ?>

<div class="row"><!-- .row start -->

	<div class="medium-10 small-12 columns"><!-- .columns start -->

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'page-templates/partials/content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

	</div><!-- .columns end -->

	<div class="medium-2 small-12 columns"><!-- .columns start -->

		<?php get_sidebar(); ?>

	</div><!-- .columns end -->

</div><!-- .row end -->

<?php get_footer(); ?>
