<?php

   echo "***********Library Management System*************";
   echo "<br>";
   echo "<br>";
   $a=0;
   $b=0;
   if ($a ==$b)
   {
    echo "Enter password****";
    echo "<br>";
    echo "<br>";
    echo "~~~~~~~~~MAIN MENU~~~~~~~~~~";
    echo "<br>";
    echo "<br>";
     echo "~~ 1.Add Books";
     echo "<br>";
     echo "~~ 2.Delete Books";
     echo "<br>";
     echo "~~ 3.Search Books";
     echo "<br>";
     echo "~~ 4.View Books List";
     echo "<br>";
     echo "~~ 5.Edit Book Record";
     echo "<br>";
     echo "~~ 6.Change Password";
     echo "<br>";
     echo "~~ 7.Close Application";
     echo "<br>";
     echo "<br>";
     echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";
     
   }
   else
   {
     echo "Please enter valid password";
   }
   echo "<br>";
   echo "<br>";
   $var=4;
   $b=0;
   $c=0;
   $e=0;
   $f=0;
   $var1=1;
   echo "Enter your choice :";
   switch($var)
    {
    
        case 1 :
            echo "1.Add books";
            echo "<br>";
            echo "<br>";
            echo "~~~~~~SELECT CATEGOIES~~~~~~~";
            echo "<br>";
            echo "<br>";
            echo "~~ 1.Computer";
            echo "<br>";
            echo "<br>";
  switch($var1)
    {
      case 1:
            echo "Enter your choice :1.Computer ";
            echo "<br>";
            echo "<br>";
           echo "Enter The Information Below";
            echo "<br>";
            echo "~~~~~~~~~~~~~~~~~~~~~~";
            echo "<br>";
            $m= array("Category:computer","Book ID:1","Book Name:JAVA","Author:E-Balaguruswami","Quantity:5","Price:150");
     print_r($m[0]);
     echo "<br>";
     print_r($m[1]);
     echo "<br>";
     print_r($m[2]);
     echo "<br>";
     print_r($m[3]);
     echo "<br>";
     print_r($m[4]);
     echo "<br>";
     print_r($m[5]);
     break;
     default :
        echo "Please enter valid choice";
        echo "<br>";
     break;
    }   
            echo "<br>";
            echo "<br>";
            echo "~~ 2.Electronics";
            echo "<br>";
            echo "~~ 3.Electrical";
            echo "<br>";
            echo "~~ 4.Civil";
            echo "<br>";
            echo "~~ 5.Mechanical";
            echo "<br>";
            echo "~~ 6.Architecture";
            echo "<br>";
            echo "~~ 7.Back to main menu";
            echo "<br>";
            echo "<br>";
            echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";
         break;  

        case 2 :
            echo "2.Delete books";
            echo "<br>";
            echo "<br>";
            echo "Enter The Book ID to Delete:";
            echo "<br>";
            echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";
        break;

        case 3 :
             echo "3.Search books";
             echo "<br>";
             echo "<br>";
             echo "~~1.Search By ID";
             echo "<br>";
             echo "<br>";
             echo "~~2.Search By Name";
             echo "<br>";
             echo "<br>";
             echo "Enter your choice :1";
             echo "<br>";
             if ($b == $c)
             {
                  echo "*****Search Book By ID*****";
                  echo "<br>";
                  echo "<br>";
                  echo "Enter the valid book ID :1";
                  echo "<br>";
                  echo "The Book is Available";
                  echo "<br>";
                  echo "ID :1";
                  echo "<br>";
                  echo "Name :JAVA";
                  echo "<br>";
                  echo "Author :E-Balaguruswami";
                  echo "<br>";
                  echo "Quantity :5";
                  echo "<br>";
                  echo "Price :Rs.150.00";
                  echo "<br>";
                  echo "Back No :2";
                  echo "<br>";
                  echo "<br>";
                  echo "Try another Search ? <Y/N>";
                  echo "<br>";
                  echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";

             }
             else 
             {
                  echo "Please enter valid choice";
                  echo "<br>";
             }
        break;

        case 4 :
              echo "4.View book list";
              echo "<br>";
              echo "<br>";
              if($e  == $f)
              {
                  echo "  CATEGORY     ID     BOOK NAME      AUTHOR      QTY      PRICE     RACKNO ";
                  echo "<br>";
                  echo "<br>";
                  echo "Computer        1         java      E-Balaguruswami    5       150.00        2";
                  echo "<br>";
                  echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";
              }
              else 
              {
                  echo "No Book Found";
                  echo "<br>";
              }
        break;
        case 5 :
              echo "5.Edit book record";
        break;
        case 6 :
              echo "6.Change password";
        break;
        case 7 :
             echo "7.Close application";
        break;
        default:
              echo "Please enter valid choice";
        break;
    }
    echo "<br>";
    echo "<br>";
    $g=0;
    $h=0;
    if($g == $h)
    {
      echo "Enter Old Password";
      echo "<br>";
    }
    else if($g == $h)
    {
      echo "Enter New Password";
      echo "<br>";
    }
    else 
    {
      echo "Password Successfully Changed ?";
      echo "<br>";
    }
    echo "Press any key to continue......";
?>