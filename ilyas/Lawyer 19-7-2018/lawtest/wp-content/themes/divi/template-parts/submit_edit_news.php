<?php
/*
 * Template Name: Submit Edit News
*/
include("conn.php");
// $conn=mysqli_connect("localhost","root","","consult");
//  if(!$conn)
//  {die("mysql not connected".mysql_errno());}

 // $conn=mysqli_connect("localhost","root","","law");
 //  if(!$conn)
 //  {die("mysql not connected".mysql_errno());}
$home=home_url();
$ppp=wp_upload_dir();
$path=$ppp['basedir'];


		 $newsid=$_POST["newsid"];
	     $title=$_POST["news_name"];
	     $desc=$_POST["desc"];
	     $value=$_POST["news_val"];
	     $test_email=$_POST["news_email"];
	     $image=$_FILES["photo"]["name"];

	 $imgpath=move_uploaded_file($_FILES["photo"]["tmp_name"],$path."/news/".$image);
	  
	 $allpage="update wp_news set news_name='$title', news_desc='$desc', news_value='$value' where news_id='$newsid'";
		$fetchall=mysqli_query($conn,$allpage);
	if($image!='')
	{
		$allpage="update wp_news set news_image='$image' where news_id='$newsid'";
		$fetchall=mysqli_query($conn,$allpage);
	}
wp_redirect($home."/editnews/?flag=edit&newsid=$newsid");exit;

	    