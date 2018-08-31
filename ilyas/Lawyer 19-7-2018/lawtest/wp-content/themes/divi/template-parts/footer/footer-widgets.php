<?php
/**
 * Displays footer widgets if assigned
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php 
if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

	<aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'twentyseventeen' ); ?>">
		<?php
		if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
			<div class="widget-column footer-widget-1">
				<?php dynamic_sidebar( 'sidebar-1' );?>
			</div>
		<?php } ?>	

	</aside><!-- .widget-area -->

<?php endif;?>

<!-- sidebar -->
<?php
if ( is_active_sidebar( 'sidebar-2' ) ) : ?>

	<aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'twentyseventeen' ); ?>">
		<?php
		if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
			<div class="widget-column footer-widget-1">
				<?php dynamic_sidebar( 'sidebar-2' );?>
			</div>
		<?php } ?>	

	</aside><!-- .widget-area -->

<?php endif; ?>
<?php 
if ( is_active_sidebar( 'sidebar-4' ) ) : ?>

	<aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'twentyseventeen' ); ?>">
		<?php
		if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
			<div class="widget-column footer-widget-1">
				<?php dynamic_sidebar( 'sidebar-4' );?>
			</div>
		<?php } ?>	

	</aside><!-- .widget-area -->

<?php endif;  ?>
