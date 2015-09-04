<?php
/**
 * The template for fallback index page
 *
 * @package    Blect_Child_Theme
 * @subpackage Blect_Child_Theme
 * @since      1.0.0
 */

get_header(); ?>
<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

		<?php if ( have_posts() ) : ?>


		<?php /** The loop. */ ?>
		<?php	while ( have_posts() ) : the_post(); ?>

		<div class="row">
			<?php get_template_part( 'templates/content', get_post_format() ); ?>
		</div>

		<?php endwhile; ?>
		<?php
		/**
		 * Pagination
		 */
		if ( function_exists( 't_pagination' ) ) 	t_pagination();
		?>
		<?php
		else : // ELSE: if have_posts()

			/** If no content, include the "No posts found" template. */
			get_template_part( 'templates/content', 'none' );

		endif; // END: if have_posts()
		?>

	</div><?php // END: #content ?>
</div><?php // END: #primary ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
