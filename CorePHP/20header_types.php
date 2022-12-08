<?php
//header types
//1.location
// header('location:https://www.google.com');

// header('location:test.php');

//2.refresh
// header('refresh:5;url=https://www.google.com');
// header('refresh:5;url=include.php');
// echo "You wiil be redirect within 5 sec..";

// MIMe-multipurpose internet mail extensions

//3.content-type
header('content-type:application/pdf');
header('content-Disposition:attachment;filename=hello.pdf');

?>