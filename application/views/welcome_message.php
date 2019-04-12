  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<style>
h1
{
	
	font-weight:bold;
}

#ab
{
	
}

img
{
	width:120px;
	height:120px;
}
td
{
	font-size:18px;
	font-weight:bold;
	text-align:left;
	
  

}


table{
   
}
body
{
	background-color:#e4e4e4b0;
	
}
b
{
	
}
#da
{
	
}


</style>
<h1>
<?php
$cityname = $clima->city->name; 
 echo $cityname; 
 
 ?>
 
 
</h1>
</center>
</div>
</div>

<div class="row">
<div class="col-md-12">

<?php $date=$clima->list[0]->dt_txt; 

?>
</br>
<b>Today</b>
</br>
</br>
</div>
<div class="col-md-12" style="border:2px solid grey; border-radius:6px;">

<div class="col-md-4" style="border-right:2px solid grey;">
<?php
$temp_max=$clima->list[0]->main->temp_max;
$temp_min=$clima->list[0]->main->temp_min;
$icon=$clima->list[0]->weather[0]->icon.".png";
$date=$clima->list[0]->dt_txt;
$today = date("F j, Y, g:i a");
$cityname = $clima->city->name; 
$pressure=$clima->list[0]->main->pressure;

?>

<table>
<tr id="da"><td><?php echo $date ;?></td></tr>
<tr><td><?php echo "<img src='http://openweathermap.org/img/w/" . $icon ."'/ >";?></td></tr>

<tr><td>Temp Max:</td><td><?php echo  $temp_max ;?>&deg;F</td></tr>
<tr><td>Temp Min:</td><td><?php echo  $temp_min ;?>&deg;F</td></tr>
<tr><td>Pressure:</td><td><?php echo  $pressure ;?>hpa</td></tr></table>


</div>
<div class="col-md-4" style="border-right:2px solid grey;">
<?php
$temp_max=$clima->list[2]->main->temp_max;
$temp_min=$clima->list[2]->main->temp_min;
$icon=$clima->list[2]->weather[0]->icon.".png";

$date=$clima->list[2]->dt_txt;
$today = date("F j, Y, g:i a");
$cityname = $clima->city->name; 
$pressure=$clima->list[2]->main->pressure;

?>

<table>
<tr id="da"><td><?php echo $date ;?></td></tr>
<tr><td><?php echo "<img src='http://openweathermap.org/img/w/" . $icon ."'/ >";?></td></tr>

<tr><td>Temp Max:</td><td><?php echo  $temp_max ;?>&deg;F</td></tr>
<tr><td>Temp Min:</td><td><?php echo  $temp_min ;?>&deg;F</td></tr>
<tr><td>Pressure:</td><td><?php echo  $pressure ;?>hpa</td></tr></table>
</div>
<div class="col-md-4">
<?php




$temp_max=$clima->list[4]->main->temp_max;
$temp_min=$clima->list[4]->main->temp_min;
$icon=$clima->list[4]->weather[0]->icon.".png";

$date=$clima->list[4]->dt_txt;
$today = date("F j, Y, g:i a");
$cityname = $clima->city->name; 
$pressure=$clima->list[4]->main->pressure;


?>

<table>
<tr id="da"><td><?php echo $date ;?></td></tr>
<tr><td><?php echo "<img src='http://openweathermap.org/img/w/" . $icon ."'/ >";?></td></tr>

<tr><td>Temp Max:</td><td><?php echo  $temp_max ;?>&deg;F</td></tr>
<tr><td>Temp Min:</td><td><?php echo  $temp_min ;?>&deg;F</td></tr>
<tr><td>Pressure:</td><td><?php echo  $pressure ;?>hpa</td></tr></table>
</div>
</div>
</div>





<div class="row">
<div class="col-md-12">

<?php $date=$clima->list[8]->dt_txt; 

?>
</br>
<b>Tommorow</b>
</br>
</br>
</div>
<div class="col-md-12" style="border:2px solid grey;">

<div class="col-md-4" style="border-right:2px solid grey;">
<?php
$temp_max=$clima->list[8]->main->temp_max;
$temp_min=$clima->list[8]->main->temp_min;
$icon=$clima->list[8]->weather[0]->icon.".png";

$date=$clima->list[8]->dt_txt;
$today = date("F j, Y, g:i a");
$cityname = $clima->city->name; 
$pressure=$clima->list[8]->main->pressure;

?>

<table>
<tr id="da"><td><?php echo $date ;?></td></tr>
<tr><td><?php echo "<img src='http://openweathermap.org/img/w/" . $icon ."'/ >";?></td></tr>

<tr><td>Temp Max:</td><td><?php echo  $temp_max ;?>&deg;F</td></tr>
<tr><td>Temp Min:</td><td><?php echo  $temp_min ;?>&deg;F</td></tr>
<tr><td>Pressure:</td><td><?php echo  $pressure ;?>hpa</td></tr></table>

</div>
<div class="col-md-4" style="border-right:2px solid grey;">
<?php
$temp_max=$clima->list[10]->main->temp_max;
$temp_min=$clima->list[10]->main->temp_min;
$icon=$clima->list[10]->weather[0]->icon.".png";

$date=$clima->list[10]->dt_txt;
$today = date("F j, Y, g:i a");
$cityname = $clima->city->name; 
$pressure=$clima->list[10]->main->pressure;

?>

<table>
<tr id="da"><td><?php echo $date ;?></td></tr>
<tr><td><?php echo "<img src='http://openweathermap.org/img/w/" . $icon ."'/ >";?></td></tr>

<tr><td>Temp Max:</td><td><?php echo  $temp_max ;?>&deg;F</td></tr>
<tr><td>Temp Min:</td><td><?php echo  $temp_min ;?>&deg;F</td></tr>
<tr><td>Pressure:</td><td><?php echo  $pressure ;?>hpa</td></tr></table>
</div>
<div class="col-md-4">
<?php




$temp_max=$clima->list[12]->main->temp_max;
$temp_min=$clima->list[12]->main->temp_min;
$icon=$clima->list[12]->weather[0]->icon.".png";

$date=$clima->list[12]->dt_txt;
$today = date("F j, Y, g:i a");
$cityname = $clima->city->name; 
$pressure=$clima->list[12]->main->pressure;


?>

<table>
<tr id="da"><td><?php echo $date ;?></td></tr>
<tr><td><?php echo "<img src='http://openweathermap.org/img/w/" . $icon ."'/ >";?></td></tr>

<tr><td>Temp Max:</td><td><?php echo  $temp_max ;?>&deg;F</td></tr>
<tr><td>Temp Min:</td><td><?php echo  $temp_min ;?>&deg;F</td></tr>
<tr><td>Pressure:</td><td><?php echo  $pressure ;?>hpa</td></tr></table>
</div>
</div>
</div>




<div class="row">
<div class="col-md-12">
</br>
<b>
<?php $date=$clima->list[16]->dt_txt; 
echo date('Y-m-d', strtotime("+2 days"));

?>
</b>
</br>
</div>
<div class="col-md-12" style="border:2px solid grey;">

<div class="col-md-4" style="border-right:2px solid grey;">
<?php
$temp_max=$clima->list[16]->main->temp_max;
$temp_min=$clima->list[16]->main->temp_min;
$icon=$clima->list[16]->weather[0]->icon.".png";

$date=$clima->list[16]->dt_txt;
$today = date("F j, Y, g:i a");
$cityname = $clima->city->name; 
$pressure=$clima->list[16]->main->pressure;

?>

<table>
<tr id="da"><td><?php echo $date ;?></td></tr>
<tr><td><?php echo "<img src='http://openweathermap.org/img/w/" . $icon ."'/ >";?></td></tr>

<tr><td>Temp Max:</td><td><?php echo  $temp_max ;?>&deg;F</td></tr>
<tr><td>Temp Min:</td><td><?php echo  $temp_min ;?>&deg;F</td></tr>
<tr><td>Pressure:</td><td><?php echo  $pressure ;?>hpa</td></tr></table>

</div>
<div class="col-md-4" style="border-right:2px solid grey;">
<?php
$temp_max=$clima->list[18]->main->temp_max;
$temp_min=$clima->list[18]->main->temp_min;
$icon=$clima->list[18]->weather[0]->icon.".png";

$date=$clima->list[18]->dt_txt;
$today = date("F j, Y, g:i a");
$cityname = $clima->city->name; 
$pressure=$clima->list[18]->main->pressure;

?>

<table>
<tr id="da"><td><?php echo $date ;?></td></tr>
<tr><td><?php echo "<img src='http://openweathermap.org/img/w/" . $icon ."'/ >";?></td></tr>

<tr><td>Temp Max:</td><td><?php echo  $temp_max ;?>&deg;F</td></tr>
<tr><td>Temp Min:</td><td><?php echo  $temp_min ;?>&deg;F</td></tr>
<tr><td>Pressure:</td><td><?php echo  $pressure ;?>hpa</td></tr></table>
</div>
<div class="col-md-4">
<?php




$temp_max=$clima->list[20]->main->temp_max;
$temp_min=$clima->list[20]->main->temp_min;
$icon=$clima->list[20]->weather[0]->icon.".png";

$date=$clima->list[20]->dt_txt;
$today = date("F j, Y, g:i a");
$cityname = $clima->city->name; 
$pressure=$clima->list[20]->main->pressure;


?>

<table>
<tr id="da"><td><?php echo $date ;?></td></tr>
<tr><td><?php echo "<img src='http://openweathermap.org/img/w/" . $icon ."'/ >";?></td></tr>

<tr><td>Temp Max:</td><td><?php echo  $temp_max ;?>&deg;F</td></tr>
<tr><td>Temp Min:</td><td><?php echo  $temp_min ;?>&deg;F</td></tr>
<tr><td>Pressure:</td><td><?php echo  $pressure ;?>hpa</td></tr></table>
</div>
</div>
</div>



<div class="row">
<div class="col-md-12">
</br>
<b>
<?php $date=$clima->list[24]->dt_txt; 

echo date('Y-m-d', strtotime("+3 days"));

?>
</b>
</br>
</br>
</div>
<div class="col-md-12" style="border:2px solid grey;">

<div class="col-md-4" style="border-right:2px solid grey;">
<?php
$temp_max=$clima->list[24]->main->temp_max;
$temp_min=$clima->list[24]->main->temp_min;
$icon=$clima->list[24]->weather[0]->icon.".png";

$date=$clima->list[24]->dt_txt;
$today = date("F j, Y, g:i a");
$cityname = $clima->city->name; 
$pressure=$clima->list[24]->main->pressure;

?>

<table>
<tr id="da"><td><?php echo $date ;?></td></tr>
<tr><td><?php echo "<img src='http://openweathermap.org/img/w/" . $icon ."'/ >";?></td></tr>

<tr><td>Temp Max:</td><td><?php echo  $temp_max ;?>&deg;F</td></tr>
<tr><td>Temp Min:</td><td><?php echo  $temp_min ;?>&deg;F</td></tr>
<tr><td>Pressure:</td><td><?php echo  $pressure ;?>hpa</td></tr></table>

</div>
<div class="col-md-4" style="border-right:2px solid grey;">
<?php
$temp_max=$clima->list[26]->main->temp_max;
$temp_min=$clima->list[26]->main->temp_min;
$icon=$clima->list[26]->weather[0]->icon.".png";

$date=$clima->list[26]->dt_txt;
$today = date("F j, Y, g:i a");
$cityname = $clima->city->name; 
$pressure=$clima->list[26]->main->pressure;

?>

<table>
<tr id="da"><td><?php echo $date ;?></td></tr>
<tr><td><?php echo "<img src='http://openweathermap.org/img/w/" . $icon ."'/ >";?></td></tr>

<tr><td>Temp Max:</td><td><?php echo  $temp_max ;?>&deg;F</td></tr>
<tr><td>Temp Min:</td><td><?php echo  $temp_min ;?>&deg;F</td></tr>
<tr><td>Pressure:</td><td><?php echo  $pressure ;?>hpa</td></tr></table>
</div>
<div class="col-md-4">
<?php




$temp_max=$clima->list[28]->main->temp_max;
$temp_min=$clima->list[28]->main->temp_min;
$icon=$clima->list[28]->weather[0]->icon.".png";

$date=$clima->list[28]->dt_txt;
$today = date("F j, Y, g:i a");
$cityname = $clima->city->name; 
$pressure=$clima->list[28]->main->pressure;


?>

<table>
<tr id="da"><td><?php echo $date ;?></td></tr>
<tr><td><?php echo "<img src='http://openweathermap.org/img/w/" . $icon ."'/ >";?></td></tr>

<tr><td>Temp Max:</td><td><?php echo  $temp_max ;?>&deg;F</td></tr>
<tr><td>Temp Min:</td><td><?php echo  $temp_min ;?>&deg;F</td></tr>
<tr><td>Pressure:</td><td><?php echo  $pressure ;?>hpa</td></tr></table>
</div>
</div>
</div>




<div class="row">
<div class="col-md-12">
</br>
<b>
<?php $date=$clima->list[32]->dt_txt; 

echo date('Y-m-d', strtotime("+4 days"));


?>
</b>
</br>
</br>
</div>
<div class="col-md-12" style="border:2px solid grey;">

<div class="col-md-4" style="border-right:2px solid grey;">
<?php
$temp_max=$clima->list[32]->main->temp_max;
$temp_min=$clima->list[32]->main->temp_min;
$icon=$clima->list[32]->weather[0]->icon.".png";

$date=$clima->list[32]->dt_txt;
$today = date("F j, Y, g:i a");
$cityname = $clima->city->name; 
$pressure=$clima->list[32]->main->pressure;

?>

<table>
<tr id="da"><td><?php echo $date ;?></td></tr>
<tr><td><?php echo "<img src='http://openweathermap.org/img/w/" . $icon ."'/ >";?></td></tr>

<tr><td>Temp Max:</td><td><?php echo  $temp_max ;?>&deg;F</td></tr>
<tr><td>Temp Min:</td><td><?php echo  $temp_min ;?>&deg;F</td></tr>
<tr><td>Pressure:</td><td><?php echo  $pressure ;?>hpa</td></tr></table>

</div>
<div class="col-md-4" style="border-right:2px solid grey;">
<?php
$temp_max=$clima->list[34]->main->temp_max;
$temp_min=$clima->list[34]->main->temp_min;
$icon=$clima->list[34]->weather[0]->icon.".png";

$date=$clima->list[34]->dt_txt;
$today = date("F j, Y, g:i a");
$cityname = $clima->city->name; 
$pressure=$clima->list[34]->main->pressure;

?>

<table>
<tr id="da"><td><?php echo $date ;?></td></tr>
<tr><td><?php echo "<img src='http://openweathermap.org/img/w/" . $icon ."'/ >";?></td></tr>

<tr><td>Temp Max:</td><td><?php echo  $temp_max ;?>&deg;F</td></tr>
<tr><td>Temp Min:</td><td><?php echo  $temp_min ;?>&deg;F</td></tr>
<tr><td>Pressure:</td><td><?php echo  $pressure ;?>hpa</td></tr></table>
</div>
<div class="col-md-4">
<?php




$temp_max=$clima->list[36]->main->temp_max;
$temp_min=$clima->list[36]->main->temp_min;
$icon=$clima->list[36]->weather[0]->icon.".png";

$date=$clima->list[36]->dt_txt;
$today = date("F j, Y, g:i a");
$cityname = $clima->city->name; 
$pressure=$clima->list[36]->main->pressure;


?>

<table>
<tr id="da"><td><?php echo $date ;?></td></tr>
<tr><td><?php echo "<img src='http://openweathermap.org/img/w/" . $icon ."'/ >";?></td></tr>

<tr><td>Temp Max:</td><td><?php echo  $temp_max ;?>&deg;F</td></tr>
<tr><td>Temp Min:</td><td><?php echo  $temp_min ;?>&deg;F</td></tr>
<tr><td>Pressure:</td><td><?php echo  $pressure ;?>hpa</td></tr></table>
</div>
</div>
</div>



</div>



