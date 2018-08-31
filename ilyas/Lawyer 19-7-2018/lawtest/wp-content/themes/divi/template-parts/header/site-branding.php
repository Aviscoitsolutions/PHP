<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
$home=home_url();
?>
	 <div class="site-branding" style="padding: 0px !important;">
	<div class="wrap1">
	<div class="container-fluid" style1="margin-top: 100px">
				<div class="row head1">
				<div class="col-md-6">
					<div class="float-right"><i class="fas fa-phone-volume"></i>&nbsp;&nbsp;9800765476&nbsp;&nbsp;&nbsp;<a href="#"><i class="fas fa-envelope"></i>&nbsp;avisco@itsolutions.com</a>
					</div>
				</div>
				<div class="col-md-6">
					<a href="<?=$home?>/contact/">Free Advoice For Seniour Citizen</a> 
					     <span style="">-  	
						 <?php						 
						 if(isset($_SESSION["username1"])) 
						 	{echo '<a href="'.$home.'/login/?flag=logout">Logout</a>';}
						   else
						 	{echo '<a href="'.$home.'/login/">Login</a>';}
						 ?>
						 </span>
				</div>
			    </div>
			</div>
</div>  <!-- .wrap  -->
</div><!-- .site-branding -->