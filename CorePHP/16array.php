<?php

//numeric array
// $n = array("PHP","ASP","JAVA");
// echo "<pre>";
// // print_r(($n));
// print_r($n[1]);
// echo "<br>";
// print_r($n[2]);
// echo "<br>";
// print_r($n[0]);
// echo "<br>";


// // Associative array
// echo "<br>";
// $a = array("x"=>"Apple","y"=>"Orange","z"=>"Kiwi");
// // print_r($a);
// echo "<br>";
// print_r($a['x']);
// echo "<br>";
// print_r($a['y']);
// echo "<br>";
// print_r($a['z']);
// echo "<br>";


// Multidemensional array
echo "<br>";
$m = array(12,34,array("PHP","ASP"),array("x"=>"Apple","y"=>"Orange","z"=>"mango"));
// print_r($m);
print_r($m[3]['x']);
echo "<br>";
print_r($m[2][1]);
echo "<br>";
print_r($m[1]);
?>