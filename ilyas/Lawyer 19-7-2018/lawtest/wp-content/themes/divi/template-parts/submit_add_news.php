<?php
/*
 * Template Name: Submit Add News

 */


include("conn.php");
// $conn=mysqli_connect("localhost","root","","consult");
//  if(!$conn)
//  {die("mysql not connected".mysql_errno());}
//get_header();
		$home=home_url();
		$ppp=wp_upload_dir();
		$upload=$ppp['basedir'];

	    $title=$_POST["news_name"];
	    $desc=$_POST["desc"];
	    $news_image=$_FILES["news_image"]["name"];
	    $value=$_POST["news"];

	    $image=$_FILES["news_image"]["name"]; 
		//$jjjj=$_POST["submit"];
		$imagename=explode(".",$image);
		$imagename[0];
		$ext=$imagename[1];
		echo $nameimage=$imagename[0].".".$ext;


	  $imgpath=move_uploaded_file($_FILES["news_image"]["tmp_name"],$upload."/news/".$nameimage);

		echo $allpage="INSERT INTO wp_news (news_name,news_desc ,news_image, news_value,news_date)
		VALUES ('$title','$desc','$news_image','$value', CURDATE())";
			 $fetchall=mysqli_query($conn,$allpage);

	
		wp_redirect($home."/addnews/?flag=done");exit;
		