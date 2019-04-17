<style>

body
{
	background-color:#EAFFEA;
	
}
td
{
	height:50px;
	pad
}
</style>

<div class="container">
<div class="row">
<div class="col-md-12">
<h2>Smtp settings</h2>
</div>
</div>
<div class="row">
<div class="col-md-12">
<center>

<p style="color:green; font-size:16px; font-size:16px; font-weight:bold;"><?php echo $this->session->flashdata('thunderstorm');?></p>
<p style="color:red; font-size:16px;font-size:16px; font-weight:bold;"><?php echo $this->session->flashdata('thunder');?></p>
</center>
</div>
</div>
<div class="row">
<div class="col-md-12">
<center>

<h3>Add your smtp configurations here</h3>
</center>
</div>
</div>
<div class="row">
<div class="col-md-12">
<center>
<form action="<?php echo base_url(); ?>index.php/smtpadd" method="post">
<table>
<tr><td>Host:</td><td><input type="text" name="host" value="" required /></td></tr>
<tr><td>Port:</td><td><input type="text" name="port" value="" required /></td></tr>
<tr><td>Username:</td><td><input type="text" name="username" value="" required /></td></tr>
<tr><td>Password:</td><td><input type="password" name="password" value="" required /></td></tr>

</table>
<input type="submit" class="btn btn-primary" value="submit" name="submit" />

</form>
</center>





</div>
</div>
</br>

<div class="row">
<div class="col-md-12">
<center>
<div style="border:2px solid grey; width:600px;">
<h4>Click here to edit or delete your smtp configurations</h4>
<form action="<?php echo base_url(); ?>index.php/smtpedits" method="post">
<input type="hidden" name="id" value="" />
<input type="submit" class="btn btn-warning" value="edit/delete" name="edit" />

</form>
</div>
</center>


</div>
</div>
</br>
</br>

</div>



