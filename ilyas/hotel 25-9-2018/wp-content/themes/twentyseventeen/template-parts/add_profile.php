<?php 
/*
Template Name:Add Profile
*/
get_header();
$home=get_home_url();
?>
<div class="container">
<div class="row">
<div class="col-md-6">
<a href="<?=$path;?>/all-profile/" class="admnbtn">Dashboard</a>
</div>
<div class="col-md-6 text-right">
<a href="<?=$path;?>/add-profile/" class="admnbtn">Add Profile</a>
</div>
</div>
</div>
<div class="container">
	<?php if ($_GET['flag']=="success") { ?>
	<div class="bg-success text-white text-center">Record Added.</div>
	<?php } ?>

	<div class="temp">
		<h1 class="text-center">Add profile</h1>
		<form name="add" id="add" method="post" enctype="multipart/form-data" action="<?php echo $home;?>/add-submit/">
		<table border="0">
			<tr>
				<td><b>Name</b></td>
				<td><input type="text" name="test_name" id="test_name" value="" class=""/></td>
			</tr>
			<tr>
				<td><b>Image</b></td>
				<td><input type="file" name="test_img" id="test_img" value="" class=""/></td>
			</tr>
			<tr>
				<td><b>Description</b></td>
				<td><textarea name="test_desc" id="test_desc" rows="10" class=""></textarea></td>
			</tr>
			<tr>
				<td><b>Active if checked</b></td>
				<td align="center"><input type="checkbox" name="test_val" id="test_val" rows="10" value="1"style ="font-size:30px;"class=""></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"/></td>
			</tr>

			
		</table>
	</form>
	</div>
</div>
<?php
get_footer();
?>
