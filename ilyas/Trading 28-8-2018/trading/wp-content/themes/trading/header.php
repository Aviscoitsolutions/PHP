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
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css">

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>css/bootstrap-grid.css">
<?php wp_head();?>
<?php $templatepath=get_template_directory_uri();?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
  <link rel="stylesheet" type="text/css" href="<?php echo $templatepath;?>/css/slider.css">
<!-- slider -->

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"></script> -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
<!-- slider -->
<!-- font awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<!-- BOOsttrap font awesome -->
<!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
<!-- font awesome -->
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






</head>
<body>
	<div class="container-fluid" style="background: #fff">
		<div class="row">
		<div class="col-sm-6">			
			<img src="<?php echo $templatepath;?>/image/Logo.jpg" style="width: 150px;height: 56px;">
			</div>
			<div class="col-sm-6 text-right">
				<div class="float-right">
				<div class="row pdg">
					<div class="col-sm-2 cont">
						<h6 class="text-right  text-center"><a href="#">Login</a></h6>
					</div>
					<div class="col-sm-3 cont">
						<h6 class="text-right  text-center"><a href="#">Register</a></h6>
					</div>
					<div class="col-sm-7">
					<h6 class="float-left ">Contact No.123456987452</h6>
					<h6  class="float-left mtb">Fax:987456321</h6>
					</div>
				</div>
				</div>		
			</div>
		</div>
		
	</div>
	<!-- Menu -->
 <div class="container-fluid"  style="background: #5e86ad !important;height1: 50px;">
		<nav class="navbar navbar-expand-lg navbar-light bg-light"  style="background: #5e86ad !important;">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		<div class="collapse navbar-collapse text-center " id="navbarTogglerDemo01">
		  	<?php wp_nav_menu(
						array(
						    'theme_location'  => 'top-menu',
						    'menu'            => 'menu1',
						    'container'       => 'ul ',
						    'container_class' => '',
						    'container_id'    => '',
						    'menu_class'      => 'navbar-nav mr-auto mt-2 mt-lg-0 text-center',
						    'menu_id'         => 'navbarTogglerDemo01',
						    'echo'            => true,
						    'fallback_cb'     => 'wp_page_menu',
						    'before'          => '',
						    'after'           => '',
						    'link_before'     => '',
						    'link_after'      => '',						    
						    'depth'           => 0,
						    'walker'          => ''
						    )
						);


?>		    
<!-- //wp_nav_menu( array(		'theme_location' => 'top',		'menu_id'        => 'top-menu',	) );  -->
<!-- <ul class="navbar-nav mr-auto mt-2 mt-lg-0 text-right float-right">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Account</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Trading</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="http://localhost/trading/account/">Account</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link disabled" href="#">Disabled</a>
		      </li>
		    </ul>
		  <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form> -->
		 </div>
		</nav>
	</div> 
	<!-- Menu -->

<!-- <header id="masthead" class="site-header" role="banner">-->
		<?php //get_template_part( 'template-parts/header/header', 'image' ); ?>
		<?php //if ( has_nav_menu( 'top' ) ) : ?>
			 <!-- <div class="navigation-top">
				<div class="wrap"> -->
					<?php //get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				<!-- </div>
			</div> -->
		<?php //endif; ?>

<!--</header> -->
<?php if(is_front_page()) { ?>
<div class="container-fluid" style="/*height: 450px;*/padding: 0px;margin: 0px;">

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

    <!-- indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- inner -->
    <div class="carousel-inner" role="listbox">
      <div class="item active"  style="background: no-repeat;">
        <img src="<?php echo $templatepath;?>/image/s1.jpg" alt="" style="height: 350px;">
      </div>
      <div class="item" style="background: no-repeat;background-size: 100% !important;background-size:cover!important;">
        <img src="<?php echo $templatepath;?>/image/s2.jpg" alt="" style="height: 350px;">
      </div>
      <div class="item" style="background: no-repeat;background-size: 100% !important;background-size:cover !important;">
        <img src="<?php echo $templatepath;?>/image/s3.jpg" alt="" style="height: 350px;">
      </div>
    </div>

    <!-- controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    
  </div>

</div><!--  -->
<?php } ?>

<script  src="<?php echo $templatepath;?>/js/index.js"></script>
<script  src="<?php echo $templatepath;?>/js/bootstrap.min.js"></script>

	<!-- slider -->