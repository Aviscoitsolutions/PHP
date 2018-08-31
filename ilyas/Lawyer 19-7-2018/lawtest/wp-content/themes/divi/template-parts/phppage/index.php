<?php

$conn=mysqli_connect("localhost","root","","lawtest");
  if(!$conn)
  {die("mysql not connected".mysql_errno());}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Pagination</title>

<link href="style.css" rel="stylesheet" type="text/css" />

</head>

<body>

<table style="border: 1px #000000 solid;" width="400" cellspacing="2" cellpadding="2" align="center">

<?php

$perpage = 5;

if(isset($_GET["page"])){

$page = intval($_GET["page"]);

}

else {

$page = 1;

}

$calc = $perpage * $page;

$start = $calc - $perpage;

$result = mysqli_query($conn, "select * from post Limit $start, $perpage");

$rows = mysqli_num_rows($result);
if($rows){
$i = 0;
while($post = mysqli_fetch_assoc($result)) {
?>
<tbody>
<tr style="background-color: #cccccc;">
<td style="font-weight: bold;font-family: arial;"><?php echo $post["title"]; ?></td>
</tr>
<tr>
<td style="font-family: arial;padding-left: 20px;"><?php echo $post["detail"]; ?></td>
</tr>
<?php

}

}

?>

</tbody>

</table>
