<?php
/*
 * Template Name: Submit Add Testimonials

 */
include("conn.php");
// $conn=mysqli_connect("localhost","root","","consult");
//  if(!$conn)
//  {die("mysql not connected".mysql_errno());}

	     $title=$_POST["news_name"];
	     $desc=$_POST["desc"];
	     $value=$_POST["test_val"];
	     $test_news=$_POST["test_email"];
	     $image=$_FILES["photo"]["name"];
	     $path="C:xampp/htdocs/lawtest/wp-content/uploads/testimonials/".$image;
	     $upload_path=wp_upload_dir();
	     $upload=$upload_path['basedir'];

	echo $imgpath=move_uploaded_file($_FILES["photo"]["tmp_name"],$path);
	//C:\xampp\htdocs\lawtest\wp-content\uploads\testimonials
	echo $allpage="INSERT INTO wp_testimonials (test_name, test_email, test_desc, test_value, test_image, test_date)
	VALUES('$title','$test_news', '$desc','$value','$image', CURDATE())";
	$fetchall=mysqli_query($conn,$allpage);
	wp_redirect("http://localhost/lawtest/add-testimonials/?flag=done");exit;
		