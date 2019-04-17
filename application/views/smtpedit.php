<style>

body
{
	background-color:#EAFFEA;
	
}
</style>

<div class="container">
<div class="row">
<div class="col-md-12">
<h2>Smtp edit</h2>
</div>
</div>
<div class="row">
<div class="col-md-12">
<center>

<p style="color:green; font-size:16px; font-size:16px; font-weight:bold;"><?php echo $this->session->flashdata('thunderstorm');?></p>
<p style="color:red; font-size:16px;font-size:16px; font-weight:bold;"><?php echo $this->session->flashdata('thunders');?></p>
</center>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php
foreach ($smtped as  $val) {
?>
<form action="<?php echo base_url(); ?>index.php/smtpedited" method="post">
<input type="hidden" name="id" value="<?php echo $val['id'];?>"  />
Host:<input type="text" name="host" value="<?php echo $val['host'];?>" required />
Port:<input type="text" name="port" value="<?php echo $val['port'];?>" required />
Username:<input type="text" name="username" value="<?php echo $val['username'];?>" required />
Password:<input type="password" name="password" value="<?php echo $val['password'];?>" required />
<input type="submit" value="submit" name="submit" />
<input type="submit" value="delete" name="delete" />

</form>
<?php } ?>






</div>
</div>



