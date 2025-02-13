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

function echoDivisableNumbers() {
    $i = 1;
    while ( $i <= 30) {
        if ( $i % 2 == 0 || $i % 3 == 0) {
            echo "$i";
        }
        
        $i++;
    
    }

}
?>