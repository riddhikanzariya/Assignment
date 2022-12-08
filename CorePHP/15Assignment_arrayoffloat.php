<?php


$marks = array(
    "Ankit" => array(

        "Gujarati" => 95,
        "English" => 85.34,
        "Hindi" => 74,
        "science" =>67.50,
        "Maths" =>87.28,
    ),
    
    "Ram" => array(
        
        "Gujarati" => 78.65,
        "English" => 98,
        "Hindi" => 46.36,
        "science" =>54.20,
        "Maths" =>99.25,
    ),
      
    "Anoop" => array(
          
        "Gujarati" => 88.97,
        "English" => 46,
        "Hindi" => 99,
        "science" =>52.85,
        "Maths" =>33.75,
    ),
);
    
foreach($marks as $mark) {
    echo $mark['Gujarati']. " ".$mark['English']." ".$mark['Hindi']." ".$mark['science']." ".$mark['Maths']."<br>"; 
}



?>