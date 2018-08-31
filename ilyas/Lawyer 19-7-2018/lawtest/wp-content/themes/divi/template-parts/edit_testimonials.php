<?php
/*
 * Template Name:Submit Edit Testimonials
 */

include("conn.php");
// $conn=mysqli_connect("localhost","root","","consult");
//  if(!$conn)
//  {die("mysql not connected".mysql_errno());}
//get_header();


if(isset($_POST['submit']))
{
	$upp=wp_upload_dir();
	  $upload=$upp['basedir'];
	   $home=home_url();

	     $testid=$_POST["testid"];
	     $title=$_POST["news_name"];
	     $desc=$_POST["desc"];
	     $value=$_POST["test_val"];
	     $test_email=$_POST["test_email"];
	     $image=$_FILES["photo"]["name"];
	     $ext=explode(".",$image);
	     $ext[1];	     

	     $path1=$upload."/testimonials/".$image;

	$imgpath=move_uploaded_file($_FILES["photo"]["tmp_name"],$path1);	
    $allpage="update wp_testimonials set test_name='$title',test_email='$test_email', test_desc='$desc', test_value='$value' where test_id='$testid'";
    $fetchall=mysqli_query($conn,$allpage);
	if($image!='')
	{
	$imagf="update wp_testimonials set test_image='$image' where test_id='$testid'";	
	$fetchimg=mysqli_query($conn,$imagf);
	}
	wp_redirect($home."/edit-testimonials/?flag=edit&testid=$testid");exit;
}




		