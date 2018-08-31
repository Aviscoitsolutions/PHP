<?php
/*
 * Template Name: posts111
 */
//include("conn.php");
 $conn=mysqli_connect("localhost","root","","lawtest");
  if(!$conn)
  {die("mysql not connected".mysql_errno());}

 get_header();
if (have_posts()) : while (have_posts()) : the_post(); ?>

 <?php the_title(); ?>
 <?php the_content(); ?>
 <?php get_the_date(); ?>

<?php endwhile; ?>
<?php 
//previous_post_link();
//next_post_link();
echo paginate_links();
?>

<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>