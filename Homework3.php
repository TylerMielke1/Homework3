<?php 
// Name: Tyler Mielke
// Email: tmielke@genesee.edu
// Description:

function getEvenNumbers($n) {
    $evens = [];
    for ($i = 2; $i <= $n; $i+= 2 ) {
        $evens[] = $i;
    }
    return $evens;
}


?>