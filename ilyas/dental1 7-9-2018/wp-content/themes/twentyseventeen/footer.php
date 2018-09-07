<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->
		<div class="footer bghder site-footer" style="padding-top: 50px;">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-sm-12">
					<div class="row">
					<div class="col-md-4 col-sm-4">
					<div class="textwidget">	<h3><a href="#" class="skew_forward">For Individuals</a></h3>
					<ul class="footer_list" style="list-style: none;">
						<li><a href="#">How It Works</a></li>
						<li><a href="#">How We Can Help</a></li>
						<li><a href="#">FAQ</a></li>
					</ul>
				</div>
		        <div class="textwidget"><h3><a href="#" class="skew_forward">For Organizations</a></h3>
					<ul class="footer_list" style="list-style: none;">

						<li><a href="#">Industry Solutions</a></li>

						<li><a href="#">Why Best Doctors</a></li>

						<li><a href="#">FAQ</a></li>

					</ul>
				</div>
				</div>
			<div class="col-md-4 col-sm-4">
			 <div class="textwidget"><h3><a href="/for-physicians/" class="skew_forward">For Physicians</a></h3>
				<ul class="footer_list" style="list-style: none;">
					<li><a href="#">The Best Doctors Poll</a></li>

					<li><a href="#">Plaques</a></li>

					<li><a href="#">FAQ</a></li>

				</ul>
			</div>
			<div class="textwidget">	<h3><a href="/about-us/" class="skew_forward">About Us</a></h3>

			<ul class="footer_list" style="list-style: none;"> 

				<li><a href="#">What We Do</a></li>
				<li><a href="#">Stories</a></li>
				<li><a href="#">Our Team</a></li>
				<li><a href="#">Medical Advisory Board</a></li>

				<li><a href="#">Global Offices</a></li>

			</ul>
		</div>
	</div>
	<div class="col-md-4 col-sm-4">
	<div class="textwidget custom-html-widget"><h3><a href="#" class="skew_forward">Resources</a></h3>
				<ul class="footer_list" style="list-style: none;">
					<li><a href="#">Vital Signs™ Blog</a></li>
					<li><a href="#">Webinars</a></li>
					<li><a href="#">Press Releases</a></li>
				</ul>
	</div>	
	<div class="textwidget custom-html-widget"><h3>
    <a href="#" class="skew_forward">Contact Us</a>
	</h3>
		<ul class="footer_list" style="list-style: none;">
		    <li>
		        <a href="#">Inquiries</a>
		    </li>
		    <li>
		        <a href="#">Analytics Support</a>
		    </li>
		    <li>
		        <a href="#">Tell Us Your Story</a>
		    </li>
		</ul>
	</div>
	</div>
	</div>
	</div>
				<div class="col-md-2 col-sm-12">
					<div class="footer_logo">
						<a href="#"></a>
					</div>
					<div class="footer_social">
						<ul class="footer_social" style="list-style: none;display: inline;">
							<li><a href="#" target="_blank"><i class="fab fa-facebook fs30"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter fs30"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin fs30"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram fs30"></i></a></li>
							</ul>
					</div>
					</div>
			</div>
			
		</div>
	</div>
		<footer id="colophon" class="site-footer1 bghder" role="contentinfo">
			<div class="wrap">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif;
				//get_template_part( 'template-parts/footer/site', 'info' );
				?>
				
			</div><!-- .wrap -->
			<div class="container-fluid text-white bg-dark">All right reserved. Copyright © 2018 Avisco IT Solutions.</div>
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
