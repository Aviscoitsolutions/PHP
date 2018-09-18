<?php 
/*
Template Name:Add Submit
*/
//get_header();
include("connect.php");
$sitepanel=$_POST["flag"];
$name=$_POST["test_name"];
$img=$_FILES["test_img"]["name"];
$size=$_FILES["test_img"]["size"];
$desc=$_POST["test_desc"];
$val=$_POST["test_val"];
$movepath=wp_upload_dir();
$upload=$movepath['basedir'];
$home=$movepath['url'];
$imgext=explode(".",$img);
 $imgext[0];
 $imgext[2];
 $imgext[1];

/*****************************************THIS  IS FOR SITE PANEL PAGE****************************/
if($sitepanel == 'sitepanel'){		
		
		if($imgext[1] == 'jpg')
		{
			//3145728
			//exit;
			if($size < 3145728)
			{
					$imgpath=$upload."/testimonials/".$img;
					//exit;
					$moveimage=move_uploaded_file($_FILES["test_img"]["tmp_name"],$imgpath);
					$insert="insert into wp_testimonials(test_name,test_desc,test_img,test_value,test_date) values('$name','$desc','$img','$val',now())";
					$insertq=mysqli_query($con,$insert);
					
					if($sitepanel=='sitepanel')
					{
					wp_redirect($home."/add-site-testimonials/?flag=success");exit;
					} 
					else
					{
					wp_redirect($home."/add-testimonials/?flag=success");exit;
					}


			}
			else
			{
				wp_redirect($home."/add-site-testimonials/?flag=simg");	exit;

			}

		}
		else
		{
			wp_redirect($home."/add-site-testimonials/?flag=rimg");	exit;	
		}

		
		
} else {

/*****************************************THIS  IS FOR SITE PANEL PAGE****************************/
/*****************************************THIS  IS FOR ADMIN PANEL PAGE****************************/

	
		
		if($imgext[1] == 'jpg')
		{
			//3145728
			//exit;
			if($size < 3145728)
			{
					$imgpath=$upload."/testimonials/".$img;
					//exit;
					$moveimage=move_uploaded_file($_FILES["test_img"]["tmp_name"],$imgpath);
					$insert="insert into wp_testimonials(test_name,test_desc,test_img,test_value,test_date) values('$name','$desc','$img','$val',now())";
					$insertq=mysqli_query($con,$insert);
					if($sitepanel=='sitepanel')
					{
					wp_redirect($home."/add-testimonials/?flag=success");exit;
					} 
					else
					{
					wp_redirect($home."/add-testimonials/?flag=success");exit;
					}


			}
			else
			{
				wp_redirect($home."/add-testimonials/?flag=simg");	exit;

			}

		}
		else
		{
			wp_redirect($home."/add-testimonials/?flag=rimg");	exit;	
		}

		
		
}
/*****************************************THIS  IS FOR ADMIN PANEL PAGE****************************/







// if($img!='jpg' && $sitepanel == 'sitepanel'){		
// 		wp_redirect($home."/add-site-testimonials/?flag=rimg");		
// }
// $imgpath=$upload."/testimonials/".$img;
// exit;
// $moveimage=move_uploaded_file($_FILES["test_img"]["tmp_name"],$imgpath);
// $insert="insert into wp_testimonials(test_name,test_desc,test_img,test_value,test_date) values('$name','$desc','$img','$val',now())";
// $insertq=mysqli_query($con,$insert);
// if($sitepanel=='sitepanel')
// {
// wp_redirect($home."/add-site-testimonials/?flag=success");
// } 
// else
// {
// wp_redirect($home."/add-testimonials/?flag=success");
// }
/*if($size < 1725830){
		if($sitepanel=='sitepanel')
		{
		wp_redirect($home."/add-site-testimonials/?flag=simg");
		} 
		else
		{
		wp_redirect($home."/add-testimonials/?flag=simg");
		}
}*/
?>
