<?php
/*
 * Template Name: Delete Testimonials
 */
include("conn.php");

// $conn=mysqli_connect("localhost","root","","lawyer");
// if(!$conn)
// {die("mysql not connected".mysql_errno());}
$testid=$_GET['testid'];
$home=home_url();

echo $newsi="delete from wp_testimonials where test_id='$testid'";
$login=mysqli_query($conn,$newsi);
wp_redirect($home."/all-testimonials/?flag=delete");exit;
?>

		