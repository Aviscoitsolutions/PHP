<?php
/*
 * Template Name: Gallery
 */
include("conn.php");?>
<style type="text/css">
#page_links {
  font-family: arial, verdana;

  font-size: 12px;

  border:1px #000000 solid;

  padding: 6px;

  margin: 3px;

  background-color: #cccccc;

  text-decoration: none;

 }

 #page_a_link
 {
  font-family: arial, verdana;

  font-size: 12px;

  border:1px #000000 solid;

  color: #ff0000;

  background-color: #cccccc;

  padding: 6px;

  margin: 3px;

  text-decoration: none;
 }
 </style>
 <?php
 // $conn=mysqli_connect("localhost","root","","lawtest");
 //  if(!$conn)
 //  {die("mysql not connected".mysql_errno());}
get_header();
$uploads = wp_upload_dir();
$upload_path = $uploads['baseurl'];
?>
<div class="container">
<div class="row">
<div class="col-md-12 text-center brdrdus prctiara" style="width: 80%;margin:0 auto;">
GALLERY
</div>
</div>
</div>
</br></br>
<div class="container-fluid">
    <?php include("paginat.php");?>
</div>

<?php 
 $tmppage=wp_get_theme()->get_page_templates('basename');
 $tmppage[0];

?>
<table width="400" cellspacing="2" cellpadding="2" align="center">
<tbody>
<tr>
<td align="center">
<?php
$pagee;
if(isset($pagee))
{
$result = mysqli_query($conn,"select Count(*) As Total from wp_gallery");
$rows = mysqli_num_rows($result);
if($rows)
{
$rs = mysqli_fetch_assoc($result);
$total = $rs["Total"];
}
$totalPages = ceil($total / $perpage);
if($pagee <=1 ){
echo "<span id='page_links' style='font-weight: bold;'>Prev</span>";
}
else
{
$j = $pagee - 1;
echo "<span><a id='page_a_link' href='http://localhost/lawtest/gallery/?pagee=$j'>< Prev</a></span>";
}
for($i=1; $i <= $totalPages; $i++)
{
if($i<>$pagee)
{
echo "<span><a id='page_a_link' href='http://localhost/lawtest/gallery/?pagee=$i'>$i</a></span>";
}
else
{
echo "<span id='page_links' style='font-weight: bold;'>$i</span>";
}
}
if($pagee == $totalPages )
{
echo "<span id='page_links' style='font-weight: bold;'>Next ></span>";
}
else
{
$j = $pagee + 1;
echo "<span><a id='page_a_link' href='http://localhost/lawtest/gallery/?pagee=$j'>Next</a></span>";
}
}
//echo paginate_links();
?>	
</td>
<td></td>
</tr>
</tbody>
</table>
   <?php get_footer();?>