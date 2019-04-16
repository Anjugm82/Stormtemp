<style>
img {
    width:350px;
    height:250px;
	
}
body
{
	background-color:#EAFFEA;
	
}
</style>
<div class="container">
<div class="row">
<div class="col-md-12">

<h2>Photographers Gallery</h2>
</div>
</div>
</br>





<div class="row">
<div class="col-md-12" >
<center>
</br>
<div style="border:2px solid grey; width:600px;">
</br>
<p><b>Photographers can upload their photos from here</b></p>
</br>
<form action="<?php echo base_url(); ?>index.php/imageuploads" method="post" enctype="multipart/form-data">

<table><tr><td><input type="file" name="image" value=""  required/></td>
<td><input type="submit" class="" value="submit" name="submit" /></td></tr></table>

</form>


</div>
</center>
</div>
</div>
</br>

<div class="row">
<div class="col-md-12">

<?php 


foreach ($gallery as  $val) {
  

?>
<div class="col-md-4" style="padding:2px;">
<img src="<?php echo base_url(); ?>uploads/<?php echo $val['name']; ?>" />
</div>

<?php } ?>
</div>
</div>
</div>




