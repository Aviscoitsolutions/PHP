<?php
/*
 * Template Name: Delete Case

 */
include("conn.php");

// $conn=mysqli_connect("localhost","root","","lawyer");
// if(!$conn)
// {die("mysql not connected".mysql_errno());}
$caseid=$_GET['caseid'];
$home=home_url();

echo $newsi="delete from wp_case where case_id='$caseid'";
$login=mysqli_query($conn,$newsi);
wp_redirect($home."/allcase/?flag=delete");exit;
?>

		