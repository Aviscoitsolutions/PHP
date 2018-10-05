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
					<div class="col-md-3 col-sm-3 text-center text-justify">
					<div class="textwidget"><h3><a href="#" class="skew_forward">Find Luxuary Hotels</a></h3>
					<ul class="footer_list" style="list-style: none;">
						<li><a href="#">World's Best Hotels</a></li>
						<li><a href="#">Luxury Travel Offers</a></li>
						<li><a href="#">Insider Articles</a></li>
						<li><a href="#">Why Book with Us</a></li>
						<li><a href="#">Find a Luxury Hotel</a></li>
						<li><a href="#">Luxury Travel</a></li>
					</ul>
				</div>
		        
				</div>
					<div class="col-md-3 col-sm-3 text-center">
					 <div class="textwidget"><h3><a href="/for-physicians/" class="skew_forward">Luxuary Rooms</a></h3>
						<ul class="footer_list" style="list-style: none;">
							<li><a href="#">Luxury Hotels</a></li>
							<li><a href="#">Luxury Hotel Menu</a></li>
							<li><a href="#">Luxury Hotel Locations</a></li>							
							<li><a href="#">Luxury Hotels by Interest</a></li>
							<li><a href="#">Five Star Hotel</a></li>
						</ul>
					</div>					
					</div>
					<div class="col-md-3 col-sm-3 text-center">
					<div class="textwidget custom-html-widget"><h3><a href="#" class="skew_forward">Luxuary</a></h3>
								<ul class="footer_list" style="list-style: none;">
									<li><a href="#">Luxury Bed Room</a></li>
									<li><a href="#">Luxury Bath Room</a></li>
									<li><a href="#">Luxury Swimmin Pool</a></li>
									<li><a href="#">Luxury Dining Room</a></li>
									<li><a href="#">Luxury Gardent</a></li>							
								</ul>
					</div>	
					
					</div>
					<div class="col-md-3 col-sm-3">
					<h3><a href="#" class="text-white">Contact Us</a></h3>
					<div class="col-md-12 col-sm-12">
						<h3 class="text-white">News Letter</h3>
						<input type="email" name="letter" placeholder="Email Id" class="w-100">
						<input type="submit" name="submit" value="Subscribe" class="btn-block bg-dark">
					</div>
					<div class="w-100"><h3 class="text-center text-white">Follow Us</h3></div>

					<div class="row mt-3">
						<div class="col-sm-3 col-md-3 "><a href="#" target="_blank"><i class="fab fa-facebook fs30" style="color:#3a589e;display: inline !important;"></i></a>
						</div>
						<div class="col-sm-3 col-md-3 "><a href="#" target="_blank"><i class="fab fa-twitter fs30" style="color:#2998ea;display: inline !important;"></i></a>
						</div>
						<div class=" col-sm-3 col-md-3"><a href="#" target="_blank"><i class="fab fa-linkedin fs30" style="color:#0077b5;display: inline !important;"></i></a>
						</div>
						<div class=" col-sm-3 col-md-3"><a href="#" target="_blank"><i class="fab fa-instagram fs30" style="color:#87654a;display: inline !important;"></i></a>
						</div>
					</div><!-- row end -->
					
					</div>


	</div>
	</div>
			</div>
			
		</div>
	</div>	
		<footer id="colophon" class="site-footer1 bghder" role="contentinfo">
			<!-- <div class="wrap"> -->
				<?php
				//get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) : ?>
					<!-- <nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>"> -->
						<?php
							/*wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );*/
						?>
					<!-- </nav> --><!-- .social-navigation -->
				<?php endif;
				//get_template_part( 'template-parts/footer/site', 'info' );
				?>
				
			<!-- </div> --><!-- .wrap -->			
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
	<div class="container-fluid text-white bg-dark">All right reserved. Copyright © 2018 Avisco IT Solutions Pvt Ltd.</div>
</div><!-- #page -->
<?php wp_footer(); ?>
<!-- change password -->
<script type="text/javascript">
    function changepass() {    	
        
         var pass1 = document.getElementById("cpwd").value;         
         var pass2 = document.getElementById("cpwd1").value;
		// alert(pass1+"  "+pass2);
if (pass1 != pass2) 
        {        	
            alert("Passwords Do not match");
            document.getElementById("cpwd").value="";
            document.getElementById("cpwd1").value="";
            document.getElementById("cpwd").focus();           
            return false;
        } }
</script>
<!-- change password -->
<!-- header bgcolor -->
<script>
    $(document).ready(function(){
      $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 20) { // check if user scrolled more than 50 from top of the browser window
          $("#headerbg").css("background-color", "#d4af37"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
        } else {
          $("#headerbg").css("background-color", "transparent"); // if not, change it back to transparent
        }
      });
    });
</script>
<!-- header bgcolor -->
<!--Payment gateway Booking page  -->
<script>
$(document).ready(function(){
    $("#payment").submit(function(){
        alert("Submitted");
        var fname=$("#firstname").val();
        var lname=$("#lastname").val();
        var email=$("#email").val();
        var phone=$("#phone").val();
        var address1=$("#address1").val();
        var city=$("#city").val();       
        var country=$("#country").val();
        var zipcode=$("#zipcode").val();        
        
        //alert(fname+" "+lname+" "+email+""+phone+" "+address1+" "+city+" "+country+" "+zipcode);
        if(fname=="")
        {
        	alert("Please Fill First Name");
        	$("#firstname").focus();
        	return false;
        }
        if(lname=="")
        {
        	alert("Please Fill Last Name");
        	$("#lastname").focus();
        	return false;
        }
        if(email=="")
        {
        	alert("Please Fill email");
        	$("#email").focus();
        	return false;
        }
        if(phone=="")
        {
        	alert("Please Fill phone");
        	$("#phone").focus();
        	return false;
        }
        if(address1=="")
        {
        	alert("Please Fill address1");
        	$("# address1").focus();
        	return false;
        }
        if(city=="")
        {
        	alert("Please Fill city");
        	$("#city").focus();
        	return false;
        }
        if(country=="")
        {
        	alert("Please Fill country");
        	$("#country").focus();
        	return false;
        }
        if(zipcode=="")
        {
        	alert("Please Fill zipcode");
        	$("#zipcode").focus();
        	return false;
        }
    });
});
</script>
<!-- Payment gateway Booking page -->

<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
<?php $temppath=get_template_directory_uri();?>

    <script src="<?php echo $temppath;?>/js/bootstrap.min.js"></script> 
	
</body>
</html>
