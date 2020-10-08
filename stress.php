<?php
function Fibonacci($number){     
    if ($number == 0) 
        return 0;     
    else if ($number == 1) 
        return 1;     
      
    else
        return (Fibonacci($number-1) +  
                Fibonacci($number-2)); 
} 
$number = 20;
$returnNumber = 0; 
for ($counter = 0; $counter < $number; $counter++){   
    $returnNumber = Fibonacci($counter);
} 
$instance_id = @file_get_contents("http://instance-data/latest/meta-data/instance-id");
echo "This is the answer: ".$returnNumber." from instance: ".$instance_id." ";
?>