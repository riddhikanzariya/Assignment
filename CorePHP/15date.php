<?php
echo date ('d-m-y');
echo "<br>";
echo date('D.M.Y');
echo "<br>";
echo date('d/m/y H:i:s A');
echo "<br>";

//strtotime
// $str = date('d-m-y',strtotime('+1week'));
$str = date('d-m-y',strtotime('+1month'));
echo $str;
echo"<br>";

echo var_dump(checkdate(10,12,2020));
echo "<br>";

//mktime
$mk =mktime(0,0,0,date('m'),date('d')+2,date('y'));
echo date('d-m-y',$mk);
echo "<br>";
date_default_timezone_set('America/Los_Angeles');
echo date('d-m-y H:i:s a');
?>