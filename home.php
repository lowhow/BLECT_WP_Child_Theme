<?php
/**
 * The template for home page
 *
 * @package    Blect_Child_Theme
 * @subpackage Blect_Child_Theme
 * @since      1.0.0
 */
get_header();
global $helper;
?>
	<div class="page-body">
		<div class="page-body-container container">
			<div class="page-body-inner row">
				<div id="primary" class="content-area col-md-8">
					<?php if ( ! is_paged() ) : ?>
					<?php endif; // END: is_paged() ?>
				</div>
				<div class="col-md-4 margin-top-1x"><?php get_sidebar(); ?></div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
