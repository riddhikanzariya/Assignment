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
       <h1>MAIN MENU</h1>
       <ol>
        <li>Add Books</li>
        <li>Delete Book</li>
        <li>Search Book</li>
        <li>View Book List</li>
        <li>Edit Book Record</li>
        <li>Change Password</li>
        <li>Close Application</li>
        Enter Your Choice :
        <input type="text" name="choice" value="" placeholder="Enter Your Valid Choice">
        <input type="submit" name="submit" value="Enter">
       </ol>
    </form>
</body>
</html>

<?php

if(isset($_POST['submit']))
{
    $c =$_POST['choice'];
    switch($c)
    {
        case 1: 
             header('location:category.php');
        break;   
        case 2: 
            header('location:deletebook.php');
       break;   
       case 3: 
            header('location:viewbook.php');
        break;  
        case 4: 
            header('location:.php');
       break;   
       case 5: 
           header('location:.php');
       break;   
       case 6: 
          header('location:changepassword.php');
       break;   
      case 7: 
         header('location:closeapplication.php');
      break; 
      default :
           echo "Invalid Choice";   
      break;
    }
}

?>