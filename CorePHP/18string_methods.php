<?php

$a ="Hello Tops";
//lenth
// echo strlen($a);

//position
// echo strpos("Hello World","World");

$b ="I am Top's Student";
// echo $b;
//slash(')
//echo addslashes($b);

//cslash (particular word slash)
$str = addcslashes("Hello World","o");
// echo ($str);

// echo chunk_split($b,3,"-");

$arr =array("Have","A","Nice","Day");
//array to string
// echo implode(" ",$arr);

//string to array
 //print_r(explode(" ",$b));

 //echo md5($a);
 //echo base64_encode($a);
// echo base64_decode("SGVsbG8gVG9wcw==");
 echo "<pre>";
print_r(str_split($b,4));

?>