<?php 

function findMissing( $a, $b, $n, $m) 
{ 
	for ( $i = 0; $i < $n; $i++) 
	{ 
		$j; 
		for ($j = 0; $j < $m; $j++) 
			if ($a[$i] == $b[$j]) 
				break; 

		if ($j == $m) 
			echo $a[$i] , " "; 
	} 
} 

// Driver code 
$a = array( 1,2,3,4,6,10); 
$b = array( 1); 
$n = count($a); 
$m = count($b); 
findMissing($a, $b, $n, $m); 


?> 
