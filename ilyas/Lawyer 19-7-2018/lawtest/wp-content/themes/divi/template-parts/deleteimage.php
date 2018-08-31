<?php
/*
 * Template Name: Delete Image
 */
include("conn.php");

// $conn=mysqli_connect("localhost","root","","lawyer");
// if(!$conn)
// {die("mysql not connected".mysql_errno());}
$galid=$_GET['img'];
$home=home_url();

echo $newsi="delete from wp_gallery where gal_id=$galid";
$login=mysqli_query($conn,$newsi);
wp_redirect($home."/gallerylist/?flag=delete");exit;
?>

		