<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package demo
 * @subpackage dental3
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">


<link href="first/assets/bootstrap.min.css" rel="stylesheet">
<script src="first/assets/bootstrap.min.js"></script>
<script src="first/assets/jquery-1.11.1.min.js"></script>
<link href="first/style.css">
<link href="first/font-awesome.min.css">

<link href="first/assets/list.css">

<?php wp_head(); ?>
</head>
<body>
  
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="navbar-header page-scroll">
    <h2 style="color: black">AVISCO</h2><!-- </a> -->
    </div>
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <?php $defaults = array(
    'container'       => 'div',
    'container_class' => 'collapse bs-example-navbar-collapse-1',
    'container_id'    => 'bs-example-navbar-collapse-1',
    'menu_class'      => 'nav navbar-nav navbar-right',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
   
    'depth'           => 0,
    'walker'          => ''
  );

  /*?>*/
 
/*<?php */
wp_nav_menu( $defaults );
 ?>
        
        <!-- /.navbar-collapse -->
</div> 
    <!-- /.container-fluid -->
</nav>

<header>
  <div class="container">
    <h2> AVISCO</h2>
  <div class="row">
    <div class="col-sm-6">
        <h3>Book Appointment</h3>
        <form action="http://www.practo.com" 
        target="_blank">
        <button type="submit" class="btn btn-primary btn-lg">Click here</button>
        </form>
    </div>
    <div class="col-sm-6"> 
      <h3 style="text-align:center;">
             Opning time</h3>
             <p>Monday to Saturday:9am to 5pm</p>
              <p>   Sunday: closed</p>
    </div>
  </div>
  </div>
</header>
