<?php
$conn=mysqli_connect("localhost","root","","lawtest");
  if(!$conn)
  {die("mysql not connected".mysql_errno());}
$uploads = wp_upload_dir();
$upload_path = $uploads['baseurl'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Pagination</title>

<link href="style.css" rel="stylesheet" type="text/css" />

</head>

<body>

<table cellspacing="4" cellpadding="4" align="center">

<?php

$perpage = 9 ;

if(isset($_GET["pagee"])){

$pagee = intval($_GET["pagee"]);

}

else {

$pagee = 1;

}

$calc = $perpage * $pagee;

$start = $calc - $perpage;

$result = mysqli_query($conn, "select * from wp_gallery Limit $start, $perpage");
$rows = mysqli_num_rows($result);
if($rows){
$i = 0;?>
<tbody>
	<?php 
	$count1=0;
	while($post = mysqli_fetch_assoc($result)) { 	
	if($count1%3==0)
	{ echo '<tr style="border-bottom: none;">';}
	$count1++;?>
    <td style="width: 30%"><img src="<?php echo $upload_path;?>/gallery/<?php echo $post['img_name'];?>" width="200" height="200" class="gall" alt="<?php echo $post['img_name'];?>">    
    </td>
    <?php
    if($count1%3==0)
    { echo '</tr>';}
     ?>
<!--<tr>
 <td style="font-family: arial;padding-left: 20px;"><?php echo $post["img_date"]; ?></td> 

</tr>-->
<?php
}
}
?>

</tbody>

</table>