<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-branding">

		<div class="wrap19">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-7">
					<?php the_custom_logo(); ?>

					<div class="site-branding-text">
						<?php if ( is_front_page() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php endif; ?>

						<?php
						$description = get_bloginfo( 'description', 'display' );

						if ( $description || is_customize_preview() ) :
						?>
							<p class="site-description"><?php echo $description; ?></p>
						<?php endif; ?>
					</div><!-- .site-branding-text -->

					<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && ! has_nav_menu( 'top' ) ) : ?>
					<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
				<?php endif; ?>
			</div>
			<!-- col-md -8 end -->
			<div class="col-md-5">
				<div class="row">
					<div class="col-md-3 bghdb">
						<h6 class="text-right  text-center"><a href="#" class="liht">Login</a></h6>
					</div>
					<div class="col-md-3 bghdb">				
						<h6 class="text-right  text-center"><a href="#" class="liht">Register</a></h6>
					</div>
					<div class="col-md-6">								
						<h6 class="float-left ">Contact No.123456987452</h6>
						<h6  class="float-left mtb1">Fax:987456321</h6>
					</div>

				</div>
		</div>





	</div><!-- .row -->
</div><!-- .contianer fluid -->
<!--  -->

	</div><!-- .wrap -->
</div><!-- .site-branding -->
