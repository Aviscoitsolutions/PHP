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

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php $template=get_template_directory_uri();?>
<!-- css -->
    <link href="<?php echo $template;?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">        
    <link href="<?php echo $template;?>/css/bootstrap-grid.css" rel="stylesheet" type="text/css">    
    <link href="<?php echo $template;?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link href="<?php echo $template;?>/css/nivo-lightbox.css" rel="stylesheet" />
	<link href="<?php echo $template;?>/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $template;?>/css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="<?php echo $template;?>/css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="<?php echo $template;?>/css/flexslider.css" rel="stylesheet" />
	<link href="<?php echo $template;?>/css/animate.css" rel="stylesheet" />
    <link href="<?php echo $template;?>/css/style.css" rel="stylesheet">
	<link href="<?php echo $template;?>/color/default.css" rel="stylesheet">
	<!-- animated -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- css -->
<!-- slider -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
<link rel="stylesheet" href="<?php echo $template;?>/css/slider.css">
<!-- slider -->



<?php wp_head(); ?>
</head>

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

<?php 
if(is_front_page())
{
masterslider(1); 
}?>

<!-- slider -->




	<div class="site-content-contain">
		<div id="content" class="site-content">
