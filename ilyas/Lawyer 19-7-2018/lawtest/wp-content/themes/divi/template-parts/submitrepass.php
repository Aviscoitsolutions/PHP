<?php
/*
 * Template Name: Submit Repass
 */

include("conn.php");
//get_header();
$home=home_url();


	    
	    // $emailpass=$_POST["emailpass"];	    
	    //$pageid=$_POST["pageid"];
		// $allpage1="select * from wp_login";
		// $login1=mysqli_query($conn,$allpage1);
		// $count1=mysqli_num_rows($login1);
		// $rows1=mysqli_fetch_array($login1);
		// $user_repass=1+$rows1['user_repass'];

		$repass=trim($_POST["repassword"]);
		$repass1=md5($repass);
		$allpage="update wp_login set password='$repass1', user_repass='1' where user_id=1";	
		$login=mysqli_query($conn,$allpage);		
	    //wp_redirect("http://localhost/lawyer/emailpass/?flag=right");exit;
	    wp_redirect($home."/reset/?flag=right");exit;		



	    
		
		