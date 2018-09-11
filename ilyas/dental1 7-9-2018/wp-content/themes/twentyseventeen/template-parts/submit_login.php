<?php
/*
 * Template Name: Submit Login
 */


		include("connect.php");

		$home=home_url();
	    $userid=trim($_POST["userid"]);
	    $pwd=trim($_POST["pwd"]);
	    $attemp=$_POST["count"];
	   
	  //$pageid=$_POST["pageid"];

	    $md5pwd=md5($pwd);
	    $allpage1="select * from wp_users where user_pass='$md5pwd' && user_login='$userid'";	
		$login11=mysqli_query($conn,$allpage1);		
		$count11=mysqli_num_rows($login11);
		$rows11=mysqli_fetch_assoc($login11);						
		$username1=$rows11["username"];		
		$userpass=$rows11["user_repass"];		
		if($userpass > 0)
		{   //echo "C";exit;
			session_start();
			$_SESSION["username1"] =$username1 ;
			wp_redirect($home."/changepassword/");exit;
		}
		else
		{
			//echo "D";exit;
			/*$allpage="select * from wp_login where username='$userid' and password='$md5pwd'";	
			$login=mysqli_query($conn,$allpage);
			$count2=mysqli_num_rows($login);
			$rows=mysqli_fetch_array($login);
			$username=$rows['username'];
			$attt=$rows['user_repass'];			
			if($count2 > 0 )
					{
					  //echo "login";exit;
						session_start();						
						$_SESSION["username1"] =$username ;
						wp_redirect($home."/admin-dashboard/");
					}
				else
					{
					//echo "Please again ";exit;					
					// $querychpwd1="update wp_login set user_repass='$attemp' where user_id='1'";
					// $queryexe1=mysqli_query($conn,$querychpwd1);
					$attemp=$attemp+1;
					 wp_redirect($home."/login/?flag=wrong&count=".$attemp);exit;	
						
					}
			*/
		
		}
		//$fetchall=mysqli_query($conn,$allpage);

		//echo "submitted";
		//wp_redirect("http://localhost/consult/all-pages-fetch-code/");exit;
		