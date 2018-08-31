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
<?php
if(is_page('news'))
{
dynamic_sidebar( 'sidebar-3' );
}
?>
		<footer id="colophon" class="site-footer" role="contentinfo">
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

				get_template_part( 'template-parts/footer/site', 'info' );
				?>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>
<!-- divi foooter -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- main js -->
<!-- <script  src="<?php echo get_template_directory_uri();?>/js/admin_post_settings.js"></script>
<script  src="<?php echo get_template_directory_uri();?>/js/custom.js"></script>
<script  src="<?php echo get_template_directory_uri();?>/js/custom.min.js"></script>
<script  src="<?php echo get_template_directory_uri();?>/js/menu_fix.js"></script>
<script  src="<?php echo get_template_directory_uri();?>/js/smoothscroll.js"></script>
<script  src="<?php echo get_template_directory_uri();?>/js/theme-customizer.js"></script>
<script  src="<?php echo get_template_directory_uri();?>/js/theme-customizer-controls.js"></script> -->
<!-- main js -->


<!-- Divi footer -->
<!-- Slider -->
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://unpkg.com/popper.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>
<script  src="<?php echo get_template_directory_uri();?>/js/index.js"></script>
<!-- Slider -->
<!-- font elegant -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/HTML CSS/lte-ie7.js">
<!-- font elegant -->
<!-- Change Password -->

<script type="text/javascript">
    function changepass() {    	
         var pass1 = document.getElementById("cpwd").value;         
         var pass2 = document.getElementById("cpwd1").value;
         //alert(pass1+"  "+pass2);
        if (pass1 != pass2) 
        {        	
            alert("Passwords Do not match");
            document.getElementById("cpwd").value="";
            document.getElementById("cpwd1").value="";
            document.getElementById("cpwd").focus();           
            return false;
        }     
        
    }
</script>

</body>
</html>
