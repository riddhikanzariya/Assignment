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
   password :
   <input type="password" name="password" value="" placeholder="Enter password">
   <input type="submit" name="submit" value="login"> 

</form>
</body>
</html>


<?php

if(isset($_POST['submit']))
{
    $password =$_POST['password'];

    if($password == "1234")
    {
        header('location:mainmenu.php');
    }
    else 
    {
        echo "Invalid password";
    }
}
?>