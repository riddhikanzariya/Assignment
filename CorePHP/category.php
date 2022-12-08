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
      <h1>Select Categories</h1>
      <ol>
        <li>Computer</li>
        <li>Electronics</li>
        <li>Electrical</li>
        <li>Civil</li>
        <li>Mechanical</li>
        <li>Architecture</li>
        <li>Back to mein menu</li>
        Enter your choice :
        <input type="text" name="choice" value="" placeholder="Enter your valid choice">
        <input type="submit" name="submit" value="Enter">
      </ol>
    </form>
</body>
</html>

<?php
  if(isset($_POST['submit']))
  {
    $c =$_POST['choice'];
    if($c == "7")
    {
       header('location:mainmenu.php');
    }
    else 
    {
      header('location:editbook.php');
    }
  }
?>