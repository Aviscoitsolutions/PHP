<?php
/*
 * Template Name:Delete Testimonials
 */

include("connect.php");
$home=home_url();

$testid=$_GET["testid"];
echo $delete="delete from wp_testimonials where test_id=$testid";
mysqli_query($con,$delete);	
	
wp_redirect($home."/all-testimonials/?flag=delete");exit;





		