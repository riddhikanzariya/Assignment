<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Password: <input type="password" name="t1" placeholder="Enter Password"/>
    <input type="submit" name="submit" value="Enter"/>
</body>
</html>

<?php

if(isset($_POST['submit']))
{
    $pass = $_POST['t1'];
    if($pass == 'riddhi')
    {
        header('location:mainmenu.php');
    }
    else{
        echo "Invalid Password";
    }
}


?>