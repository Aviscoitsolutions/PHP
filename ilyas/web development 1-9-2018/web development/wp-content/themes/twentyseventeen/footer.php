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
</div>
    
<footer id="contact" class="footer action-lage bg-black p-top-80">
    <div class="container">
      <div class="row">       
          <div class="col-md-3">
            <div class="widget_item widget_about">
              <h5 class="lgreen">About Us</h5>
              <p class="m-top-30">Lorem ipsum dolor sit amet consec tetur adipiscing elit nulla aliquet pretium nisi in cursus maecenas nec eleifen.</p>
              <div class="widget_ab_item m-top-30">
                <div class="item_icon lgreen"><i class="fa fa-location-arrow"></i></div>
                <div class="widget_ab_item_text">
                  <h6 class="white">Location</h6>
                  <p>123 suscipit ipsum nam auctor mauris dui, ac sollicitudin mauris, Bandung</p>
                </div>
              </div>
              <div class="widget_ab_item m-top-30">
                <div class="item_icon lgreen"><i class="fa fa-phone"></i></div>
                <div class="widget_ab_item_text">
                  <h6 class="white">Phone :</h6>
                  <p>+1 2345 6789</p>
                </div>
              </div>
              <div class="widget_ab_item m-top-30">
                <div class="item_icon lgreen"><i class="fa fa-envelope-o far fa-envelope"></i></div>
                <div class="widget_ab_item_text">
                  <h6 class="text-white white">Email Address :</h6>
                  <p>youremail@mail.com</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="widget_item widget_latest sm-m-top-50">
              <h5 class="lgreen">Latest News</h5>
              <div class="widget_latst_item m-top-30">
                <div class="item_icon"><!-- <img src="assets/images/ltst-img-1.jpg" alt="website template image"> --></div>
                <div class="widget_latst_item_text">
                  <p>Lorem ipsum dolor sit amet, consectetur</p>
                  <a href="#"  class="lgreen">21<sup>th</sup> July 2016</a></div>
              </div>
              <div class="widget_latst_item m-top-30">
                <div class="item_icon"><!-- <img src="assets/images/ltst-img-2.jpg" alt="website template image"> --></div>
                <div class="widget_latst_item_text">
                  <p>Lorem ipsum dolor sit amet, consectetur</p>
                  <a href="#" class="lgreen" >21<sup>th</sup> July 2016</a></div>
              </div>
              <div class="widget_latst_item m-top-30">
                <div class="item_icon"><!-- <img src="assets/images/ltst-img-3.jpg" alt="website template image"> --></div>
                <div class="widget_latst_item_text">
                  <p>Lorem ipsum dolor sit amet, consectetur</p>
                  <a href="#" class="lgreen">21<sup>th</sup> July 2016</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-3 news">
            <div class="widget_item widget_service sm-m-top-50">
              <h5 class="text-white lgreen">Services</h5>
              <ul class="m-top-20">
                <li class="m-top-20"> <a href="#" class="white"><i class="fa fa-angle-right lgreen"></i> Web Design</a></li>
                <li class="m-top-20"> <a href="#" class="white"><i class="fa fa-angle-right lgreen"></i> User Interface Design</a></li>
                <li class="m-top-20"> <a href="#" class="white"><i class="fa fa-angle-right lgreen"></i> Web Hosting</a></li>
                <li class="m-top-20"> <a href="#" class="white"><i class="fa fa-angle-right lgreen"></i> Themes</a></li>
                <li class="m-top-20"> <a href="#" class="white"><i class="fa fa-angle-right lgreen"></i> Support Forums</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="widget_item widget_newsletter sm-m-top-50">
              <h5 class="text-white lgreen">Newsletter</h5>
              <form action="#" method="post" class="form-inline1 m-top-30 text-center">
                <div class="form-group">
                  <input type="email" class="form-control1" placeholder="Enter you Email" style="background:#fff;">
                  <button type="submit" class="btn w-100 text-center mb-5">Subscribe</button>
                </div>
              </form>
              <div class="widget_brand m-top-40"><a href="#
                " class="text-uppercase lgreen">Your Logo</a>
                <p>Lorem ipsum dolor sit amet consec tetur adipiscing elit nulla aliquet pretium nisi in</p>
              </div>
              <ul class="list-inline m-top-20 ">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
              </ul>
            </div>
          </div>
        <!-- </div> -->
      </div>
    </div>
    <div class="main_footer fix bg-mega text-center p-top-40 p-bottom-30 m-top-80">
      <div class="col-md-12">
        <p class="wow fadeInRight animated" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInRight;">All Rights Reserved. Made with <i class="fa fa-heart" style="color: #ff00c6;"></i> by <a target="_blank" rel="nofollow noopener" href="http://www.aviscoitsolutions.com/" style="color: #ff00c6;">Avisco IT Solutions Pvt Ltd</a>. </p>
      </div>
    </div>
  </footer>   
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

<!-- <script src="<?php echo $template;?>/js/jquery.min.js"></script>	 
    <script src="<?php echo $template;?>/js/bootstrap.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="<?php echo $template;?>/js/jquery.sticky.js"></script>
	<script src="<?php echo $template;?>/js/slippry.min.js"></script> 
	<script src="<?php echo $template;?>/js/jquery.flexslider-min.js"></script>
	<script src="<?php echo $template;?>/js/morphext.min.js"></script>
	<script src="<?php echo $template;?>/js/gmap.js"></script>
	<script src="<?php echo $template;?>/js/jquery.mb.YTPlayer.js"></script>
    <script src="<?php echo $template;?>/js/jquery.easing.min.js"></script>	
	<script src="<?php echo $template;?>/<?php echo $template;?>/js/jquery.scrollTo.js"></script>
	<script src="<?php echo $template;?>/js/jquery.appear.js"></script>
	<script src="<?php echo $template;?>/js/stellar.js"></script>
	<script src="<?php echo $template;?>/js/wow.min.js"></script>
	<script src="<?php echo $template;?>/js/owl.carousel.min.js"></script>
	<script src="<?php echo $template;?>/js/nivo-lightbox.min.js"></script>
	<script src="<?php echo $template;?>/js/jquery.nicescroll.min.js"></script>
    <script src="<?php echo $template;?>/js/custom.js"></script> -->
    <!-- slider -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://unpkg.com/popper.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>
<?php $template=get_template_directory_uri();?>
    <script src="<?php echo $template;?>/js/index.js"></script>
    <!-- slider -->

</body>
</html>
