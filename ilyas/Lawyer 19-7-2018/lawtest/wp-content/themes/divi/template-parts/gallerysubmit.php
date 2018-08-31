<?php
/**
 * Template Name: Submit Gallery  
 */
include("conn.php");
//get_header();
$home=home_url();
//$ppp=wp_upload_url();
$upload=$ppp['basedir'];
 //$_FILES["pictures"]["tmp_name"]
 $image=$_FILES["photo"]["name"]; 
$jjjj=$_POST["submit"];
$imagename=explode(".",$image);
$imagename[0];
$ext=$imagename[1];
//echo $lastid=inserted_id();exit;
$imgno="select max(gal_id) from wp_gallery";
//$selimg="select * from wp_gallery where gal_id=";
$imgnoquery=mysqli_query($conn,$imgno);
$nofetch=mysqli_fetch_array($imgnoquery);
$no=$nofetch[0]+1;

$nameimage=$imagename[0]."_".$no."."."$ext";
$imagepath="C:/xampp/htdocs/lawtest/wp-content/uploads/gallery/".$nameimage;
//if(isset($_POST["submit"]) && !empty($image) )
{
$imgpath=move_uploaded_file($_FILES["photo"]["tmp_name"],$imagepath);
$imginsert="insert into wp_gallery (img_name,img_date) values('$nameimage',CURDATE())";
$imgquery=mysqli_query($conn,$imginsert);
}
 wp_redirect($home."/gallerylist/");exit;

?>