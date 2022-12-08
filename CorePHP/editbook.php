<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Enter the information below</h1>
    <form method="post">
        <table>
              <tr>
                  <td>Category:</td>
                  <td><input type="text" name="c1" value=""></td>
              </tr>
              <tr>
                  <td>Book ID:</td>
                  <td><input type="text" name="c2" value=""></td>
              </tr>
              <tr>
                  <td>Book Name:</td>
                  <td><input type="text" name="c3" value=""></td>
              </tr>
              <tr>
                  <td>Author:</td>
                  <td><input type="text" name="c4" value=""></td>
              </tr>
              <tr>
                  <td>Quantity:</td>
                  <td><input type="text" name="c5" value=""></td>
              </tr>
              <tr>
                  <td>Price:</td>
                  <td><input type="text" name="c6" value=""></td>
              </tr>
              <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="edit"></td>
              </tr>
        </table>
    </form>
</body>
</html>

<?php

   if(isset($_POST['submit']))
   {
      $category=$_POST['c1'];
      $bookid =$_POST['c2'];
      $bookname =$_POST['c3'];
      $author =$_POST['c4'];
      $quantity=$_POST['c5'];
      $price=$_POST['c6'];

      $data =array($category,$bookid,$bookname,$author,$quantity,$price);
      print_r($data);
      //exit;

   }
?>