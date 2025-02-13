<?php 
// Name: Tyler Mielke
// Email: tmielke@genesee.edu
// Description: Demonstrates the use of functions, loops, and arrays in PHP.

// Function to get all even numbers up to a given number
function getEvenNumbers($n): array {
    $evens = [];
    for ($i = 2; $i <= $n; $i += 2) {
        $evens[] = $i;
    }
    return $evens;
}

// Function to echo numbers divisible by 2 or 3 up to 30
function echoDivisibleNumbers(): void {
    $i = 1;
    while ($i <= 30) {
        if ($i % 2 == 0 || $i % 3 == 0) {
            echo "$i ";
        }
        $i++;
    }
}

// Function to validate if a string contains at least one letter, one number, and one special character
function validateString($str): bool {
    $hasLetter = false;
    $hasNumber = false;
    $hasSpecial = false;

    for ($i = 0; $i < strlen(string: $str); $i++) {
        if (ctype_alpha(text: $str[$i])) $hasLetter = true;
        elseif (ctype_digit(text: $str[$i])) $hasNumber = true;
        else $hasSpecial = true;
    }

    return $hasLetter && $hasNumber && $hasSpecial;
}

// Function to demonstrate array_chunk by splitting an array into chunks of 3
function demonstrateArrayChunk(): void {
    $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $chunks = array_chunk(array: $numbers, length: 3);
    print_r(value: $chunks);
}

// Function to remove vowels from a given string
function removeVowels($str): array|string|null {
    return preg_replace(pattern: '/[aeiouAEIOU]/', replacement: '', subject: $str);
}

// Function to perform FizzBuzz up to a given number with customizable rules
function fizzBuzz($n, $rules = [3 => 'Fizz', 5 => 'Buzz']): void {
    for ($i = 1; $i <= $n; $i++) {
        $output = '';
        foreach ($rules as $num => $word) {
            if ($i % $num == 0) {
                $output .= $word;
            }
        }
        echo $output ?: $i;
        echo "\n";
    }
}

// Display even numbers up to 10
echo "Even numbers up to 10: ";
print_r(value: getEvenNumbers(10));

// Display numbers divisible by 2 or 3 up to 30
echo "Numbers divisible by 2 or 3 up to 30: \n";
echoDivisibleNumbers();

// Check if the string "A1!" is valid
echo "Valid string check: ";
var_dump(value: validateString(str: "A1!"));

// Demonstrate array_chunk function
echo "Array chunk example: ";
demonstrateArrayChunk();

// Remove vowels from the string "Hello World!"
echo "String without vowels: ";
echo removeVowels(str: "Hello World!");

// Perform FizzBuzz up to 15 with custom rules
echo "FizzBuzz up to 15: ";
fizzBuzz(n: 15, rules: [3 => 'Fizz', 5 => 'Buzz', 7 => 'Mazz']);
?>

