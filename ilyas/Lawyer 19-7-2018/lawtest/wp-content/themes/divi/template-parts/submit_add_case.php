<?php
/*
 * Template Name: Submit Add Case

 */
include("conn.php");
$home=home_url();
$ppp=wp_upload_dir();
$down=$ppp['basedir'];

		 $cat=$_POST["case_cat"];
	     $title=$_POST["case_name"];
	     $desc=$_POST["case_desc"];
	     $value=$_POST["case_val"];
	     $phone=$_POST["case_phone"];
	     $image=$_FILES["casephoto"]["name"];
	     $format=explode(".",$image);
	     echo $format[1];
	     if($format[1]='pdf'){

	 	$imgpath=move_uploaded_file($_FILES["casephoto"]["tmp_name"],"$down/case/".$image);

	 	 $allpage="INSERT INTO wp_case (cat_id,case_name,case_desc,case_value,case_phone,case_image, case_date)VALUES('$cat','$title','$desc','$value','$phone','$image', CURDATE())";
		$fetchall=mysqli_query($conn,$allpage); 
		wp_redirect($home."/addcase/?flag=done");exit;
	 }
	 else
	 	{
	 		wp_redirect($home."h/addcase/?flag=pdf");exit;
	 	}
	  	 

	
		