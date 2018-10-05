<?php 
/*
Template Name:Profile Submit
*/
get_header();
$home=get_home_url();
$homepath=home_url();

include("connect.php");
$sitepanel=$_POST["flag"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["emailid"];
$dob=$_POST["dob"];
$phone=$_POST["phone"];
$username=$_POST["username"];
$password=$_POST["userpass"];
echo $img=$_FILES["imgfile"]["name"];
//echo $_FILES["test_img"]["size"];
$movepath=wp_upload_dir();
$upload=$movepath['basedir'];
$imgpath=$upload."/profile/".$img;
$home=$movepath['url'];

$moveimage=move_uploaded_file($_FILES["imgfile"]["tmp_name"],$imgpath);
$insert="insert into wp_profile(prof_fname,prof_lname,prof_email,prof_dob,prof_phone,prof_username,prof_password,	prof_image,prof_date) values('$fname','$lname','$email','$dob','$phone','$username','$password','$img',now())";
$insertq=mysqli_query($con,$insert);


wp_redirect($homepath."/create-profile/?flag=success");

get_footer();
?>
