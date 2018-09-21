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
	<link href="<?php echo $temppath;?>/css/nivo-lightbox.css" rel="stylesheet" />
	<link href="<?php echo $temppath;?>/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $temppath;?>/css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="<?php echo $temppath;?>/css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="<?php echo $temppath;?>/css/flexslider.css" rel="stylesheet" />
	<link href="<?php echo $temppath;?>/css/animate.css" rel="stylesheet" />
    <link href="<?php echo $temppath;?>/css/style.css" rel="stylesheet">
	<link href="<?php echo $temppath;?>/color/default.css" rel="stylesheet"> 
<!-- css -->
<script src="<?php echo $temppath;?>/js/jquery.min.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php if(is_front_page()) { ?>		
<!-- Section: home video http://youtu.be/mroiVdC7H10-->
    <!-- <section id="intro" class="home-video text-light">
		<div class="home-video-wrapper">
		<div class="homevideo-container">
           <div id="P1" class="bg-player" style="display:block; margin: auto; background: rgba(0,0,0,0.5)" data-property="{videoURL:'https://www.youtube.com/watch?v=bTp3Pt_RQmA',containment:'.homevideo-container', quality: 'hd720', showControls: false, autoPlay:true, mute:true, startAt:0, opacity:1}">
           </div>
		</div>
		<div class="overlay">
			<div class="text-center video-caption">
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.8s">
					<h1 class="big-heading font-light"><span id="js-rotating">We are valera, Awesome Bootstrap theme, Get better appearance, Craft from pixel </span></h1>
				</div>
				<div class="wow bounceInUp" data-wow-offset="0" data-wow-delay="1s">
					<div class="margintop-30"> -->
						<!-- <a href="#about" class="btn btn-skin" id="btn-scroll">Start here</a> -->
					<!-- </div>
				</div>
			</div>
		</div>
		</div>
    </section> -->
    <!--  -->
    <!-- <?php echo $temppath?>/video/Novodent - Dental J4qqnWscqeQ  KjPzPKNbsxIClinic.mp4?rel=0&controls=0&showinfo=0&autoplay=1&loop=1&modestbranding=0-->
   <!-- 
     <iframe id="ytplayer"  class="w-100 htfrm" type="text/html" style="border:none" 
src="https://www.youtube.com/embed/vK5_cAYCpl4?rel=0&controls=0&showinfo=0&autoplay=1&version=3&playlist=1&loops=1&modestbranding=1" 
frameborder="0" controls="0"  allowfullscreen allow="autoplay; encrypted-media"></iframe>  -->
<script type="text/javascript">

$( document ).ready(function() {
	var sts= document.getElementById("myVideo");
	//alert(sts);
	//sts.controls=false;
	//var kk=sts.loops();	
	sts.play();		
});


	
</script><!-- oncanplay="strd();" -->
<video id="myVideo" class="w-100 htfrm" autoplay="true" loop="true"    poster="images/cover.jpg" title="" >
  <source id="abc1" src="<?php echo $temppath;?>/video/Nature Beautiful short video 720p HD.mp4" type="video/mp4" >
  <source id="abc2" src="<?php echo $temppath;?>/video/Nature Beautiful short video 720p HD.mp4" type="video/ogg" >  
  <source id="abc3" src="<?php echo $temppath;?>/video/Nature Beautiful short video 720p HD.mp4" type="video/webm" >  
</video>
<!-- this is most important dont delete or remove this ifram without it the video can`t play proper, sometime paly sometime not play. -->
<iframe  src="<?php echo $temppath;?>/video/Nature Beautiful short video 720p HD.mp4" width="1" height="1" controls="true"></iframe>
	<!-- /Section: intro -->	
<?php } ?>

<div id="page" class="site" >
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

					<?php get_template_part( 'template-parts/header/header', 'image' ); ?>
		<!-- <div class="" style="margin-top: 30px;"></div> -->

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
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
			
