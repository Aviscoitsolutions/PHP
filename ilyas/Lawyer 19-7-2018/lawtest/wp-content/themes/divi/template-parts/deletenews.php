<?php
/*
 * Template Name: Delete News

 */
include("conn.php");

// $conn=mysqli_connect("localhost","root","","lawyer");
// if(!$conn)
// {die("mysql not connected".mysql_errno());}
$newsid=$_GET['newsid'];
$home=home_url();

$newsi="delete from wp_news where news_id='$newsid'";
$login=mysqli_query($conn,$newsi);
wp_redirect($home."/allnews/?flag=delete");exit;
?>

		