<?php
/**
 * Template Name: Page Builder Template
 *
 * Displays the Page Builder Template via the theme.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.4.9

 */

get_header(); ?>


<?php do_action( 'spacious_before_body_content' ); ?>

	<div id="primary">
		<div id="content" class="clearfix">
			<?php
			while ( have_posts() ) : the_post();

				the_content();

			endwhile;
			?>
        </div><!-- #content -->
    </div><!-- #primary -->

<?php do_action( 'spacious_after_body_content' ); ?>

<?php
 if ( ! function_exists( 'twentyfifteen_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 * @since Twenty Fifteen 1.5
 */
function spacious_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;
 ?>
 
<?php get_footer(); ?>
