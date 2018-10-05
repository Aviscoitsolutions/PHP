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
 */
session_start();
$home=home_url();
if($_GET['flag']=='logout')
{
	unset($_SESSION['username']);
	session_destroy();
}
if( !(isset($_SESSION['username'])) && (is_page('all-testimonials') || is_page('add-testimonials')  || is_page('edit-testimonials')  ||  is_page('change-password') || is_page('dashboard') )) 
{
wp_redirect($home."/login/?flag=please");exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
 <?php $temppath=get_template_directory_uri();?>
<!-- css -->
 <!-- <link href="<?php echo $temppath;?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->
  <!--   <link href="<?php echo $temppath;?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> -->
	<!-- <link href="<?php echo $temppath;?>/css/nivo-lightbox.css" rel="stylesheet" />
	<link href="<?php echo $temppath;?>/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $temppath;?>/css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="<?php echo $temppath;?>/css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="<?php echo $temppath;?>/css/flexslider.css" rel="stylesheet" />
	<link href="<?php echo $temppath;?>/css/animate.css" rel="stylesheet" />
    <link href="<?php echo $temppath;?>/css/style.css" rel="stylesheet">
	<link href="<?php echo $temppath;?>/color/default.css" rel="stylesheet">  -->
<!-- css -->
<!-- <script src="<?php echo $temppath;?>/js/jquery.min.js"></script>
 -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>


 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script>
  $( function() {
    $( "#datepickerfrm" ).datepicker();
  } );
  $( function() {
    $( "#datepickerto" ).datepicker();
  } );
  </script>
 <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>	
	
	<?php if(is_front_page()) { ?>
		<?php //echo do_shortcode('[vgwt_print_responsive_video_slider_with_thumbnail]'); ?>



<video id="myVideo" class="w-100 htfrm" loop="true"  title="" autoplay="autoplay" >
  <source id="abc1" src="<?php echo $temppath;?>/video/10 Most Expensive Hotel Rooms In The World.mp4" type="video/mp4" oncanload="" >
  <source id="abc2" src="<?php echo $temppath;?>/video/10 Most Expensive Hotel Rooms In The World.mp4" type="video/ogg" >
  	<!-- <source id="abc3" src="<?php echo $temppath;?>/video/Nature Beautiful short video 720p HD.mp4" type="video/webm" > -->
</video>
<!-- this is most important dont delete or remove this ifram without it the video can`t play proper, sometime paly sometime not play. -->
<iframe id="rem" src="<?php echo $temppath;?>/video/Nature Beautiful short video 720p HD.mp4" width="1" height=1" border="0">
</iframe> 

	<!-- /Section: intro -->	
<?php } ?>

<div id="page" class="site" >
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

					<?php get_template_part( 'template-parts/header/header', 'image' ); ?>
		<!-- <div class="" style="margin-top: 30px;"></div> -->

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top" id="headerbg">
				<div class="wrap">
					<?php get_template_part('template-parts/navigation/navigation','top'); ?>
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
	<?php //if(is_front_page()) { 	masterslider(1); 	}	?>
	<div class="site-content-contain">
		<div id="content" class="site-content">
			
