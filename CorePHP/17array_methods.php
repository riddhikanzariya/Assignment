<?php


$a =array("x","y","z");
$b =array("Apple","Orange","Mango");
//array_combine
echo "<pre>";
print_r(array_combine($a,$b));

$c =array("x"=>"PHP","y"=>"ASP","z"=>"JAVA");
$d =array("z"=>"WD","t"=>"ST","h"=>"DM");

//array_merge (join)
print_r(array_merge($c,$d));

//array_merge_recursive (2 values)
print_r(array_merge_recursive($c,$d));

//array_count_values
$e =array("Apple","Orange","Apple","Kiwi","Mango");
print_r(array_count_values($e));

// array_push (value add)
$f =array_push($e,"JAVA");
print_r($e);


//array_pop (last value delete)
$g =array_pop($b);
print_r($b);

//array_search 3
echo array_search("PHP",$c);

//in_array
if(in_array("Apple"$e))
{
    echo "Match found";
}
else{
    echo "Match not found";
}


//array_chunk 
print_r(array_chunk($e,3));

//array_slice
print_r(array_slice($e,1));

?>