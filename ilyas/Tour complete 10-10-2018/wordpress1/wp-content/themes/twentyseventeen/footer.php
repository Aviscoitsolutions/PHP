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
		<!-- own code -->
	<footer class="bg-dark pt-5">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="fmb-4">
              <h2 class="text-white">Fellow Tourist</h2>
              <p class="text-white">Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled </p>
            </div>
          </div>
          <div class="col-md-3">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 text-white">Book Now</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Flight</a></li>
                <li><a href="#" class="text-white">Hotels</a></li>
                <li><a href="#" class="text-white">Tour</a></li>
                <li><a href="#" class="text-white">Car Rent</a></li>
                <li><a href="#" class="text-white">Beach &amp; Resorts</a></li>
                <li><a href="#" class="text-white">Mountains</a></li>
                <li><a href="#" class="text-white">Cruises</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
             <div class=" mb-4">
              <h2 class="text-white">Top Deals</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Luxe Hotel</a></li>
                <li><a href="#" class="text-white">Venice Tours</a></li>
                <li><a href="#" class="text-white">Deluxe Hotels</a></li>
                <li><a href="#" class="text-white">Boracay Beach &amp; Resorts</a></li>
                <li><a href="#" class="text-white">Beach &amp; Resorts</a></li>
                <li><a href="#" class="text-white">Fuente Villa</a></li>
                <li><a href="#" class="text-white">Japan Tours</a></li>
                <li><a href="#" class="text-white">Philippines Tours</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
             <div class="mb-4">
              <h2 class="text-white">Contact Information</h2>
              <ul class="text-white list-unstyled">
                <li><a href="#" class="text-white">198 West 21th Street, Suite 721 New York NY 10016</a></li>
                <li><a href="#" class="text-white">+ 1235 2355 98</a></li>
                <li><a href="#" class="text-white">info@yoursite.com</a></li>
                <li><a href="#" class="text-white">email@email.com</a></li>
              </ul>
            </div>
            <div class="row social text-center">
            	<div class="col-md-3">
            		<a href="#" class="face"><span class="fab fa-facebook-square fs45"></span></a>
            	</div>
            	<div class="col-md-3">
            		<a href="#" class="twitter"><span class="fab fa-twitter-square fs45"></span></a>
            	</div>
            	<div class="col-md-3">
            		<a href="#" class="google"><span class="fab fa-google-plus-square fs45"></span></a>
            	</div>
            	<div class="col-md-3">
            		<a href="#" class="linked"><span class="fab fa-linkedin fs45"></span></a>
            	</div>
            </div>
          </div>          
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p class="text-white">
			  Copyright © 2018 All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="http://aviscoitsolutions.com" target="_blank">Avisco IT Solutions</a>
			</p>
          </div>
        </div>
      </div>
    </footer>

		<!-- own code -->

		<!-- <footer id="colophon" class="site-footer" role="contentinfo">
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
					</nav> --><!-- .social-navigation -->
				<?php endif;

				//get_template_part( 'template-parts/footer/site', 'info' );
				?>
			<!-- </div> --><!-- .wrap -->
		<!-- </footer> --><!-- #colophon -->
	<!-- </div> --><!-- .site-content-contain -->
<!-- </div> --><!-- #page -->
<?php wp_footer(); ?>
<!-- slider -->
<script type="text/javascript">
	
	$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>
<!-- slider -->
<script> src="<?php echo $tempath=get_template_directory_uri();?>/js/bootstrap.min.js"></script>

</body>
</html>
