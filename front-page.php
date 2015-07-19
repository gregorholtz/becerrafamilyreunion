<?php
/**
 * The front-page.php template file.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Heisenberg
 */

get_header(); ?>

<div class="row"><!-- .row start -->

	<div class="medium-10 small-12 small-centered columns"><!-- .columns start -->

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'page-templates/partials/content', get_post_format() );
					?>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'page-templates/partials/content', 'none' ); ?>

			<?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->

	</div><!-- .columns end -->

</div><!-- .row end -->

<div class="image_divider">
</div>

<div class="row" id="rsvp">
	<div class="medium-10 small-12 small-centered columns">
		<h1>RSVP for the Reunion!</h1>

		<?php echo do_shortcode('[contact-form-7 id="45" title="RSVP"]'); ?>

	</div>
</div>


<?php get_footer(); ?>
