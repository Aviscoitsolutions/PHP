<?php
/*
 * Template Name: Submit Change password

 */
include("conn.php");
session_start();

$home=home_url();
$ppp=wp_upload_dir();
//$upload=$ppp['baseurl'];

	    $oldpwd=trim($_POST["oldpwd"]);
	    $cpwd=trim($_POST["cpwd"]);
	    $cpwd1=trim($_POST["cpwd1"]);
	    $md5old=md5(trim($oldpwd));
	    $md5cpwd=md5(trim($cpwd));
	   	
		$allpage="select * from wp_login where password='$md5old'"; 
		$login=mysqli_query($conn,$allpage);
		$row=mysqli_fetch_array($login);
		$user_id=$row['user_id']; 

		  $count=mysqli_num_rows($login);
		if( $count > 0)
			{
					//echo "login";
				$md5cpwd=md5($cpwd);	
			//echo "-".$querychpwd="update wp_login set password='$md5cpwd' where user_id='$user_id'"	;
				$querychpwd="update wp_login set password='$md5cpwd' where user_id='1'"	;
				$queryexe=mysqli_query($conn,$querychpwd);


					$allpage1="select * from wp_login";
					$login1=mysqli_query($conn,$allpage1);
					$count1=mysqli_num_rows($login1);
					$rows1=mysqli_fetch_array($login1);
					$user_repass=$rows1['user_repass'];
					// if($user_repass > 0)
					// {
					// // echo $querychpwd1="update wp_login set user_repass='0' where user_id='1'";
					// // $queryexe1=mysqli_query($conn,$querychpwd1);		
				 //    }
					

					if($user_repass > 0)
					{
					$querychpwd1="update wp_login set user_repass='0' where user_id='1'";
					$queryexe1=mysqli_query($conn,$querychpwd1);
					unset($_SESSION['username1']);
					session_destroy();
					 wp_redirect($home."/ login/?flag=reset");	
					}
					else
					{
						
				     wp_redirect($home."/changepassword/?flag=right");
				    }

			}
		else
			{
			// echo "Please again ";exit;
			wp_redirect($home."/changepassword/?flag=wrong");				
			}
		
		