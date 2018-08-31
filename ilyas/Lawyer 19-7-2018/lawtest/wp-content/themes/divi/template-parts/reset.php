<?php
/*
 * Template Name: Reset password
 */

include("conn.php");?>
<div style="width: 50%;margin:0 auto;margin-top: 25%;">
<?php
$home=home_url();
if($_GET['flag']=='wrong')
{echo "<span style='color:red'>Invalid Password</span>";}

if($_GET['flag']=='right'){
echo "<span style='color:green'>Password Reset.</span>";
}?> 
</div>
<div class="container" style="width:50%;margin:0 auto;">

			<form name="emailfm" method="post" action="<?=$home?>/submitrepass/" onsubmit="return validateForm2();">
<table width="100%" bgcolor1="0099CC1" align="center">
			<tr>
			<td colspan=2><center><font size=4><b>Reset Password</b></font></center></td>
			</tr>

			<!--<tr>
			<td>Email:</td>
			<td><input type="email" size=25 name="emailpass" id="emailpass" required></td>
			</tr>-->
                         <tr>
			<td>Temporary Password:</td>
			<td><input type="password" size=25 name="repassword" id="repassword" required></td>
			</tr>
			<tr>
			<td ><!-- <input type="Reset"> --></td>
			<td><input type="submit" onclick="return check(this.form)" value="Reset"></td>
			</tr>

			</table>
			</form>
</div>


	    
		
		