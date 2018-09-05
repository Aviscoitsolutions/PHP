<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */?>
 <!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/style.css">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/bootstrap-grid.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

<!-- slider -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'> -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/slider.css">

<!-- slider -->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/carousel.css">

<?php wp_head();
 $templatepath=get_template_directory_uri();
 ?>
</head>
<!-- toggle -->
<script>
$(document).ready(function(){
	//toggle the componenet with class accordion_body
	$(".accordion_head").click(function(){
		if ($('.accordion_body').is(':visible')) {
			$(".accordion_body").slideUp(600);
			$(".plusminus").text('+');
		}
		$(this).next(".accordion_body").slideDown(600); 
		$(this).children(".plusminus").text('-');
	});
});
</script>
<!-- toggle -->

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->
	<?php if(is_front_page()) { ?>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" style="height: 450px;">
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $templatepath;?>/image/s1.jpg" data-color="lightblue" alt="First Image" style="height: 350px;">
      <div class="carousel-caption d-md-block">        
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $templatepath;?>/image/s2.jpg" data-color="firebrick" alt="Second Image" style="height: 350px;">
      <div class="carousel-caption d-md-block">        
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $templatepath;?>/image/s3.jpg" data-color="violet" alt="Third Image" style="height: 350px;">
      <div class="carousel-caption d-md-block">        
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
</div>


<!-- <div class="container-fluid" style="/*height: 450px;*/padding: 0px;margin: 0px;">

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> -->

    <!-- indicators -->
    <!-- <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol> -->

    <!-- inner -->
    <!-- <div class="carousel-inner" role="listbox">
      <div class="item active"  style="background: no-repeat;">
        <img src="<?php echo $templatepath;?>/image/s1.jpg" alt="" style="height: 350px;">
      </div>
      <div class="item" style="background: no-repeat;background-size:cover!important;">
        <img src="<?php echo $templatepath;?>/image/s2.jpg" alt="" style="height: 350px;">
      </div>
      <div class="item" style="background: no-repeat;background-size:cover !important;">
        <img src="<?php echo $templatepath;?>/image/s3.jpg" alt="" style="height: 350px;">
      </div>
    </div> -->

    <!-- controls -->
    <!-- <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    
  </div>

</div> -->
<!--  -->
<?php } ?>
<!-- <script  src="<?php echo $templatepath;?>/js/index.js"></script>
<script  src="<?php echo $templatepath;?>/js/bootstrap.min.js"></script> -->
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

	<div class="site-content-contain">
		<div id="content" class="site-content">
