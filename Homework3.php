<?php 
// Name: Tyler Mielke
// Email: tmielke@genesee.edu
// Description:

function getEvenNumbers($n): array {
    $evens = [];
    for ($i = 2; $i <= $n; $i += 2) {
        $evens[] = $i;
    }
    return $evens;
}

function echoDivisibleNumbers(): void {
    $i = 1;
    while ($i <= 30) {
        if ($i % 2 == 0 || $i % 3 == 0) {
            echo "$i ";
        }
        $i++;
    }
}

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

function demonstrateArrayChunk(): void {
    $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $chunks = array_chunk(array: $numbers, length: 3);
    print_r(value: $chunks);
}

function removeVowels($str): array|string|null {
    return preg_replace(pattern: '/[aeiouAEIOU]/', replacement: '', subject: $str);
}

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

echo "Even numbers up to 10: ";
print_r(value: getEvenNumbers(10));

echo "Numbers divisible by 2 or 3 up to 30: \n";
echoDivisibleNumbers();

echo "Valid string check: ";
var_dump(value: validateString(str: "A1!"));

echo "Array chunk example: ";
demonstrateArrayChunk();

echo "String without vowels: ";
echo removeVowels(str: "Hello World!");

echo "FizzBuzz up to 15: ";
fizzBuzz(n: 15, rules: [3 => 'Fizz', 5 => 'Buzz', 7 => 'Mazz']);
?>

