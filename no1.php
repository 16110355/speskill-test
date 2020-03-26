<?php 

function narcissistic($ambilangka)
{   
   $sum = 0;

  
    $n = $ambilangka;
    
    $temp = $n; 
    $totalDigits = strlen($n); 
    
    while($n != 0) {
        $r = $n%10; 
        $sum = $sum+pow($r, $totalDigits);
        $n = floor($n/10); 
    }
    
    if($sum == $temp) {
        return true;
    } else {
        return false;
    }
}

echo narcissistic("153");

?> 