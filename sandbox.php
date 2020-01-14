<?php


$sol1 = file_get_contents("test/solution.cpp");

$sol2 = file_get_contents("test/solutio.cpp");


$sim = similar_text($sol1, $sol2, $percent); 
  
// To display the number of matching characters 
echo "Number of similar characters : $sim\n"; 
  
// To display the percentage of matching characters 
echo "Percentage of similar characters : $percent\n"; 
  
?> 