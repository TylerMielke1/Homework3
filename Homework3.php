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

function validatestring($str) {
    $hasLetter = false;
    $hasNumber = false;
    $hasSpecial = false;

    for  ($i = 0; $i < strlen($str); $i++) {
        if (ctype_alpha($str[$i])) $hasLetter = true;
        elseif (ctype_digit($str[$i])) $hasNumber = true;
        else $hasSpecial = true;
    
    }

return $hasLetter && $hasNumber && $hasSpecial;

}

function demonstrateArrayChunk() {
    $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $chunks = array_chunk($numbers,3);
    print_r($chunks);
}


?>