<?php
/**
 * Theme Footer Section for our theme.
 *
 * Displays all of the footer section and closing of the #main div.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */
?><head>
	

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	.footericon{
		color:#f7702a;
		font-size:25px;
		text-align:center;
		
	}
	.account{
		background-color:#1d1c1c;
		padding-top:40px;
		border-top:1px solid #f7702a;
		border-bottom:1px solid #f7702a;
		height:130px;
		margin-right:0px!important;
	}
	#live-acc{
		background-color:transparent;
		color:white;
		font-size:16px;
		border:1px solid  #f7702a;
		margin-right:30px;
		padding:10px;
		width:220px;
	}
	#live-acc:hover{
		background-color:#f7702a;
		border:2px solid  white;
	}
	#demo-acc{
		background-color:transparent;
		color:white;
		font-size:16px;
		border:1px solid  #f7702a;
		margin-left:30px;
		padding:10px;
		width:220px;
	}
	#demo-acc:hover{
		background-color:#f7702a;
		border:2px solid  white;
	}
	.clients{	
		margin-right:0px!important;
	}
	.footerinfo{
		background-color:#1d1c1c;
		color:graytext;
		padding:15px;
		width:auto;
		margin-right:0px!important;
		
	}
	#about p{
		width:auto!important;
	}
	@media (min-width: 320px) and (max-width: 480px) {
		
		#about {
		   width:80%!important;
			margin-left:10%!important;
			margin-right:10%!important;
	}
		#links{
			width:80%!important;
			margin-left:10%!important;
			margin-right:10%!important;
		}
		#contact{
			width:80%!important;
			margin-left:10%!important;
			margin-right:10%!important;
		}
		#live-acc{
			padding:2px;
			margin:3px!important;
			margin-left:15px!important;
			font-size:14px;
        width:auto;
		}
		#demo-acc{
				padding:2px;
				margin:3px!important;
			 width:auto;
			margin-left:10px!important;
			font-size:14px;
		}
	}
	
	@media (min-width: 481px) and (max-width: 667px) 
	{
		.clients{	
		margin-right:0px!important;
	}
		#about p{
			width:90%!important;}
		#live-acc{
			margin-right:10px;
       width:auto;
		}
		#demo-acc{
			 width:auto;
			margin-left:10px;
		}
	}
	@media (min-width: 481px) and (max-width: 767px) 
	{
			#about {
		   width:80%!important;
			margin-left:10%!important;
			margin-right:10%!important;
	}
		#links{
			width:80%!important;
			margin-left:10%!important;
			margin-right:10%!important;
		}
		#contact{
			width:80%!important;
			margin-left:10%!important;
			margin-right:10%!important;
		}
	
	}
	
</style>
</head>
<footer>
        </div><!-- .inner-wrap -->
    </div><!-- #main -->
<div class="row account">
	<form>
		<center>
		<input type="button" value="Open Live Account" id="live-acc"/>
		<label style="color:white;font-size:18px" id="ac-or">Or</label>
		<input type="button" value="Open Demo Account" id="demo-acc"/>
			</center>
	</form>
	
</div>
<div class="row clients" >
	<center>
	<img src="http://localhost/investments/wp-content/uploads/2018/08/visa-2-logo-png-transparent.png" width="100px" height="100px" style="padding-right:20px">
	<img src="http://localhost/investments/wp-content/uploads/2018/08/mastercard_PNG15.png"width="150px" height="150px"style="padding-right:20px">
	<img src="http://localhost/investments/wp-content/uploads/2018/08/neteller_logo.png"width="150px" height="150px" style="padding-right:30px">
	<img src="http://localhost/investments/wp-content/uploads/2018/08/1156727.png"width="150px" height="150px" style="padding-right:30px">
		<img src="http://localhost/investments/wp-content/uploads/2018/08/2000px-UnionPay_logo.svg_.png"width="100px" height="100px" style="padding-right:20px">
		</center>
</div>

   <div class=" row footerinfo">
       <div class="col-sm-6" id="about"><br>
		   <img src="http://localhost/investments/wp-content/uploads/2018/08/fxgiants-logo2.png">
			  <p style="color:white">
				  XtreamForex is a fully licensed and Regulated Marshal Island Investment Firm (MIS) (License Number 84516). XtreamForex is licensed to provide Investment Services (Reception and Transmission, Execution and Dealing on own account) and Ancillary Services.
		   </p>
		   <p style="color:gray">
			   Risk Warning: CFD's and Foreign Exchange (FX) traded on margin carry a high degree of risk. As such they may not be suitable for all investors. Investors should ensure they fully understand the risks associated with leveraged CFD and FX trading before deciding to trade because you can lose some or all invested capital. Investors may choose to seek independent advice and should not risk more than they are prepared to lose.
		   </p>
        </div>
       <div class="col-sm-3" id="links"><br>
       		    <ul>
				<li>Company</li><br>
				<li> Trading Platform</li><br>
				<li>Account</li><br>
				<li>Investment</li><br>
				<li>Market Analysis</li><br>
				<li>Education</li><br>
				<li>Contact Us</li><br>
		   </ul>
       </div>
        <div class="col-sm-3" id="contact"><br>
        			<center>
			<i class="fa fa-map-marker footericon" aria-hidden="true"><Span style="color:white;font-size:18px; margin-left:10px"><br>Trusted Company complex,
				 Ajeltex Island,MH96960 Majuro,
				 Marshal Island.</span></i>                 </center>
          <br>
			<center>
			<i class="fa fa-phone footericon" aria-hidden="true">
				<Span style="color:white;font-size:18px; margin-left:10px">               <br>(+91)0123456789</span></i>          
			</center>     
<br>
			<center>
<i class="fa fa-envelope footericon" aria-hidden="true">
	<Span style="color:white;font-size:18px; margin-left:10px"><br>
		abdshfh.safh@gmail.com</span></i> </center>       
       </div> 
   </div><!-- row-->



    <?php do_action( 'spacious_before_footer' ); ?>

    <?php
    $spacious_footer_design = spacious_options( 'spacious_footer_design', 'style_one' );
    $footer_class           = '';
    if ( $spacious_footer_design === 'style_two' ) {
        $footer_class = 'spacious-footer-style-two';
    }
    ?>

<p class="footerinfo">
 copyright @ 2018. Avisco IT Solutions
	</p>
</footer>
<!--     <footer id="colophon" class="clearfix <?php echo esc_attr( $footer_class ); ?>">
        <?php get_sidebar( 'footer' ); ?>
        <div class="footer-socket-wrapper clearfix">
            <div class="inner-wrap">
                <div class="footer-socket-area">
                    <?php do_action( 'spacious_footer_copyright' ); ?>
                    <nav class="small-menu clearfix">
                        <?php
                        if ( has_nav_menu( 'footer' ) ) {
                            wp_nav_menu( array(
                                'theme_location' => 'footer',
                                'depth'          => - 1
                            ) );
                        }
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </footer>
    <a href="#masthead" id="scroll-up"></a> -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
