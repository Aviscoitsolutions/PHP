<?php
/*
 * Template Name:Submit Edit case
 */

include("conn.php");
// $conn=mysqli_connect("localhost","root","","consult");
//  if(!$conn)
//  {die("mysql not connected".mysql_errno());}
//get_header();

$path=home_url();
//include("conn.php");
 // $conn=mysqli_connect("localhost","root","","lawtest");
 //  if(!$conn)
 //  {die("mysql not connected".mysql_errno());}
$ppp=wp_upload_dir();
$down=$ppp['basedir'];


		  $caseid=$_POST["caseid"];
		  $case_cat=$_POST["case_cat"];
	     $title=$_POST["case_name"];
	     $desc=$_POST["case_desc"];
	     $phone=$_POST["case_phone"];
	     $value=$_POST["case_val"];
	     //$test_email=$_POST["case_email"];
	     $image=$_FILES["casephoto"]["name"];
	     $format=explode(".",$image);
	     $format[1];
	     //if($format[1]='pdf'){
	     	
	     $upload_dir = wp_upload_dir();
    	 $avatar_url = $upload_dir['baseurl'];


			$imgpath=move_uploaded_file($_FILES["casephoto"]["tmp_name"],$down."/case/".$image);

			$allpage="update wp_case set  cat_id='$case_cat', case_name='$title', case_desc='$desc', case_value='$value', case_phone='$phone'  where case_id='$caseid'";

			$fetchall=mysqli_query($conn,$allpage);
			if($image!='')
				{
				$imagf="update wp_case set case_image='$image' where case_id='$caseid'";
				$fetchimg=mysqli_query($conn,$imagf);
				}
			wp_redirect($path."/edit-case/?flag=edit&caseid=$caseid");exit;
		//	}
		// else
		// {
		// 	wp_redirect("http://localhost/lawyer/edit-case/?flag=pdf");exit;
		// }

/*
if(isset($_POST['submit']))
{
	$upp=wp_upload_dir();
	  //$upload=$upp['baseurl'];
	   $upload=home_url();

	     $caseid=$_POST["caseid"];
	     $title=$_POST["case_name"];
	     $desc=$_POST["case_desc"];
	     $value=$_POST["case_val"];
	     $test_email=$_POST["case_email"];
	     $image=$_FILES["photo"]["name"];
	     $ext=explode(".",$image);
	     $ext[1];
	     $path1='C:xampp/htdocs/lawtest/wp-content/uploads/case/'.$image;
		 $imgpath=move_uploaded_file($_FILES["photo"]["tmp_name"],$path1);	
	     $allpage="update wp_case set case_name='$title',case_email='$test_email', case_desc='$desc', case_value='$value' where case_id='$caseid'";
    $fetchall=mysqli_query($conn,$allpage);
	if($image!='')
	{
	$imagf="update wp_case set case_image='$image' where case_id='$caseid'";
	$fetchimg=mysqli_query($conn,$imagf);
	}
	wp_redirect($path."/edit-case/?flag=edit&caseid=$caseid");exit;
}*/




		