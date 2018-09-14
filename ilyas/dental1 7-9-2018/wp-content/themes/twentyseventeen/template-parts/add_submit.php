<?php 
/*
Template Name:Add Submit
*/
//get_header();
include("connect.php");
$sitepanel=$_POST["flag"];
$name=$_POST["test_name"];
$img=$_FILES["test_img"]["name"];
//echo $_FILES["test_img"]["size"];
$desc=$_POST["test_desc"];
$val=$_POST["test_val"];
$movepath=wp_upload_dir();
$upload=$movepath['basedir'];
$imgpath=$upload."/testimonials/".$img;
$home=$movepath['url'];

$moveimage=move_uploaded_file($_FILES["test_img"]["tmp_name"],$imgpath);
echo $insert="insert into wp_testimonials(test_name,test_desc,test_img,test_value,test_date) values('$name','$desc','$img','$val',now())";
$insertq=mysqli_query($con,$insert);
if($sitepanel=='sitepanel')
{
wp_redirect($home."/add-site-testimonials/?flag=success");
} else{
wp_redirect($home."/add-testimonials/?flag=success");
}

?>
