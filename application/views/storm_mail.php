<!DOCTYPE html>
<html>
<head>
	<title></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
input[type="radio"] {
	margin-left:20px;

}

body
{
	background-color:#EAFFEA;
	
}
</style>
</head>
<body>



<div class="container">
<div class="row">
<div class="col-md-12">
<h2>Thunderstorm mail</h2>
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
</br>
</br>
<div class="row">
<div class="col-md-12">
<center>

<div style="border:2px grey solid;">
</br>
<p style=" font-size:18px; font-weight:bold;">Select cities to get details of thunderstorm this week.</p>
</br>
</br>

</br>
<form action="<?php echo base_url(); ?>index.php/storm_mail" method="post">
<div style="border:2px solid grey; width:700px; font-size:20px; font-weight:bold;">
<input onclick="check_finder(this)" id="0" type="radio" value="Dublin" name="dublin">Dublin
<input onclick="check_finder(this)" id="0" type="radio" value="Cork" name="cork">Cork
<input onclick="check_finder(this)" id="0" type="radio" value="Limerick" name="limerick">Limerick
<input onclick="check_finder(this)" id="0" type="radio" value="Galway" name="galway">Galway
<input onclick="check_finder(this)" id="0" type="radio" value="Swords" name="swords">Swords
<input onclick="check_finder(this)" id="0" type="radio" value="Dundalk" name="dundalk">Dundalk</br>
</div>
</br>
<div>
	<label for="mail_re">Enter email Id to send report:</label>
	<input type="email" name="mail_re" placeholder="Enter mail id here !!!">
</div>
</br>
</br>


<input  type="submit" class="btn btn-primary" value="submit" name="submit" />
<p style=" font-size:18px; font-weight:bold;"></p>
</form>
</div>
</center>
</div>
</div>

</div>
</body>

<script>


function check_finder(el) {
	var jl = $(el).prop('checked');
	var _id_ = $(el).prop('id');
	if(jl==true && _id_=='1') {
		$(el).prop('checked', false);
		$(el).prop('id',0);
	}
	else {
		$(el).prop('id',1);
	}
}
	
</script>
</html>

<?php 
/* 
 *  class="input_radio" id="1"
 *  class="input_radio" id="2"
 *  class="input_radio" id="3"
 *  class="input_radio" id="4"
 *  class="input_radio" id="5"
 *  class="input_radio" id="6"
 *
 */
?>