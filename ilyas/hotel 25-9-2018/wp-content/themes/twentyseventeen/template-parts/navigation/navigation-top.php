<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<?php the_custom_logo(); ?>
		</div>
		<div class="col-md-8 lh47">
<nav id="site-navigation" class="main-navigation  float-right" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<?php
		echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) );
		echo twentyseventeen_get_svg( array( 'icon' => 'close' ) );
		_e( 'Menu', 'twentyseventeen' );
		?>
	</button>

	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>
	
	<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; ?>

</nav><!-- #site-navigation -->
</div>
<!--<div class="col-md-1 text-right lh79">
<a href="<?php echo home_url();?>/login/?flag=logout"><?php if(isset($_SESSION["username"])) {echo 'Logout';} else {echo 'Login';}?></a>
</div>->
</div>
</div>
