<?php
session_start();
$home=home_url(); 
//echo $_SESSION["username1"];
// if(!(isset($_SESSION['username1'])))
// {
// 	session_start();
// }
if($_GET['flag']=='logout')
{
	unset($_SESSION['username1']);
	session_destroy();
}
if( !(isset($_SESSION['username1'])) && (is_page('admin-dashboard') || is_page('add-testimonials')  || is_page('addcase')  || is_page('addnews')  || is_page('all-testimonials')  || is_page('allcase')
  || is_page('allnews')   || is_page('changepassword') || is_page('edit-testimonials') || is_page('edit-case')  || is_page('editnews')  || is_page('gallerylist'))) 
{
wp_redirect($home."/login/?flag=please");exit;
}
$conn=mysqli_connect("localhost","root","","lawtest");
if (mysqli_connect_errno())
{echo "Failed to connect to MySQL:".mysqli_connect_error();}  
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- divi themes -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/divi.css">	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	
     <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript">
       $(document).ready(function() { $('#example').DataTable( { "pagingType": "full_numbers" } ); } );
    </script>
	<!-- pagination1 -->
	<!-- practice area sliding -->
	<script type="text/javascript">
		$(document).ready(function(){(function($) {	    
		  var allPanels = $('.accordion > dd').hide();	    
		  $('.accordion > dt > a').click(function() {
		    allPanels.slideUp();
		    $(this).parent().next().slideDown();
		    return false;
			  });
			})(jQuery);
			});
	</script>
	<!-- practice area sliding -->
	
    <title>lawyer | Just another WordPress site</title>
          <script>
            (function(d){
              var js, id = 'powr-js', ref = d.getElementsByTagName('script')[0];
              if (d.getElementById(id)) {return;}
              js = d.createElement('script'); js.id = id; js.async = true;
              js.src = '//www.powr.io/powr.js?external-type=wordpress';
              js.setAttribute('powr-token','XqIqw24xIq1530017940');
              ref.parentNode.insertBefore(js, ref);
            }(document));
          </script>
          <link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="dns-prefetch" href="//s.w.org">


 <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/editor-style.css" type="text/css" media="all"> -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/meta-box-styles.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/theme-customizer-controls-styles.css" type="text/css" media="all">
<!-- divi themes -->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>	
<div id="page" class="site">	
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>	
	<header id="masthead" class="site-header" role="banner">
	<?php get_template_part( 'template-parts/header/header', 'image' ); ?>		
		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">				
				<div class="wrap nrlpdg">
					 <div class="container-fluid" style="">
						 <div class="row">
							<div class="col-md-2"> 
				    <?php the_custom_logo(); ?>	
				    		</div>
				    		<div class="col-md-10" style="line-height: 36px;">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
							 </div>
						 </div>
				 	</div>  
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->	
	<?php 

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>
<!-- slider -->
<?php if(is_front_page()) { ?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" style="height:402px;">
    <div class="carousel-item">
    	<div class="slidertxt"> <h2 style="color:#fff;"><strong>Your Title Goes Here1</strong></h2>
Your content goes here. Edit or remove this text inline or in the module Content settings. You can also style every aspect of this content in the module Design settings and even apply custom CSS to this text in the module Advanced settings.<br><button class="button sldbtn">
Click Here</button></div>
      <img class="d-block w-100" src="http://localhost/lawtest/wp-content/uploads/2018/06/law.jpg" data-color="lightblue" alt="First Image">

      <div class="carousel-caption d-md-block">
        
      </div>
    </div>
    <div class="carousel-item"><div class="slidertxt"> <h2 style="color:#fff;"><strong>Your Title Goes Here1</strong></h2>
Your content goes here. Edit or remove this text inline or in the module Content settings. You can also style every aspect of this content in the module Design settings and even apply custom CSS to this text in the module Advanced settings.<br><button class="button sldbtn">
Click Here</button></div>
      <img class="d-block w-100" src="http://localhost/lawtest/wp-content/uploads/2018/06/law.jpg" data-color="firebrick" alt="Second Image">
      <div class="carousel-caption d-md-block">
        
      </div>
    </div>
    <div class="carousel-item"><div class="slidertxt"> <h2 style="color:#fff;"><strong>Your Title Goes Here1</strong></h2>
Your content goes here. Edit or remove this text inline or in the module Content settings. You can also style every aspect of this content in the module Design settings and even apply custom CSS to this text in the module Advanced settings.<br><button class="button sldbtn">
Click Here</button></div>
      <img class="d-block w-100" src="http://localhost/lawtest/wp-content/uploads/2018/06/law.jpg" data-color="violet" alt="Third Image">
      <div class="carousel-caption d-md-block">
        
      </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
<div class="container-fluid bord">
</div>
</div>
<?php } ?>
<!-- slider -->

<div class="site-content-contain">
		<div id="content" class="site-content">


