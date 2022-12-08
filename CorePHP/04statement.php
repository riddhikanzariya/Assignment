<?php
$a =0;
$b =12;

//if elseif
if($a >$b)
{
    echo "a is greater than b";
}
elseif($b >= $a)
{
    echo "b is greater than a ";
}
else{
    echo " no match found";
}

// nested if
if($a < $b)
{
    if($a!=0 && $b!=0)
    {
        echo "a is less than b";
    }
    else
    {
        echo "any one value is negative";
    }
}
else{
    echo "no match found";
}
?>