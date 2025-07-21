<?php
// ---------------------First question----------------------------
$digit_one = 1;
$digit_two = 2;
$digit_three = 3;

echo ($digit_one + $digit_two) * $digit_three . "<br>";  // Output: 9

//---------------------Second question----------------------------

function sizeOfbox($height)
{
    $width = 10;
    $length = 5;
    echo $height * $width * $length . "<br>";;
}
sizeOfbox(2);

// ---------------------Third question----------------------------
function hTOs($hours)
{
    $hours = (int)$hours;
    $seconds = $hours * 3600;
    echo $seconds . "<br>";
}
hTOs(1);
// ---------------------Fourth question----------------------------
function areaOFtriangle()
{
    $base = 10;
    $height = 5;
    $area = ($base * $height) / 2;
    echo $area . "<br>";
}
areaOFtriangle();
// ---------------------Fifth question----------------------------
function yearsTOdays($years)
{
    $days = $years * 365;
    echo $days . "<br>";
}
yearsTOdays(20);
// ---------------------Errasoft Learn By practice----------------
// ---------------------Sixth question----------------------------  
$sentence = "EraaSoft Learn by practice";
$length = strlen($sentence);
echo $length . "<br>";
// ---------------------Seventh question----------------------------
$length_2 = strlen(str_replace(' ', '', $sentence));
echo $length_2 . "<br>";
// ---------------------Eighth question----------------------------
$word_count = str_word_count($sentence);
echo $word_count . "<br>";
// ---------------------Ninth question----------------------------
str_contains($sentence, 'by') ? $result = "Yes" : $result = "No";
echo $result . "<br>";
// source https://www.php.net/manual/en/function.str-contains
// ---------------------Tenth question----------------------------
$word = substr($sentence, 0, 8);
echo $word . "<br>";
// ---------------------Eleventh question----------------------------
$modified_sentence = str_replace('by', '', $sentence);
echo $modified_sentence . "<br>";
// ---------------------Twelfth question----------------------------
$string_1 = "Eraa";
$string_2 = "soft";
$full_string = $string_1 . $string_2;
echo $full_string . "<br>";
// ---------------------Thirteenth question----------------------------
// i don't know how to solve this 
//---------------------Fourteenth question----------------------------
$sample_string = "ErraSoft";
$split_string = implode('/', str_split($sample_string, 2));
echo $split_string . "<br>";
// ---------------------Fifteenth question----------------------------
function oddOReven($number)
{
    if ($number % 2 == 0) {
        echo "Even" . "<br>";
    } else {
        echo "Odd" . "<br>";
    }
};
oddOReven(5);
// ---------------------Sixteenth question----------------------------
function oddORevenString($sentence)
{
    $length = strlen($sentence);
    if ($length % 2 == 0) {
        echo "Even" . "<br>";
    } else {
        echo "Odd" . "<br>";
    }
}
oddORevenString("EraaSoft");
// ---------------------seventeenth question----------------------------
$description = "no pain , no gain";
$word = "gain";
if (str_contains($description, $word)) {
    echo "Yes" . "<br>";
} else {
    echo "No" . "<br>";
}
// --------------------- eighteenth question----------------------------
$int_boolean = 1; // Store an int Boolean (1 for true, 0 for false)
$opposite = $int_boolean == 1 ? 0 : 1; // Get the opposite
echo "Original: " . $int_boolean . ", Opposite: " . $opposite . "<br>";

// Test with 0 as well
$int_boolean_2 = 0;
$opposite_2 = $int_boolean_2 == 1 ? 0 : 1;
echo "Original: " . $int_boolean_2 . ", Opposite: " . $opposite_2 . "<br>";

// --------------------- nineteenth question----------------------------
$word = "books"; // Test word
$last_char = substr($word, -1); // Get the last character
if ($last_char == 's') {
    echo "The word '$word' is Plural" . "<br>";
} else {
    echo "The word '$word' is Singular" . "<br>";
}

// Test with singular word
$word_2 = "book";
$last_char_2 = substr($word_2, -1);
if ($last_char_2 == 's') {
    echo "The word '$word_2' is Plural" . "<br>";
} else {
    echo "The word '$word_2' is Singular" . "<br>";
}

// --------------------- twentieth question----------------------------
function calculator($num1, $num2, $operation)
{
    if ($operation == "addition" || $operation == "+") {
        $result = $num1 + $num2;
        echo "$num1 + $num2 = $result" . "<br>";
    } elseif ($operation == "subtraction" || $operation == "-") {
        $result = $num1 - $num2;
        echo "$num1 - $num2 = $result" . "<br>";
    } elseif ($operation == "multiplication" || $operation == "*") {
        $result = $num1 * $num2;
        echo "$num1 * $num2 = $result" . "<br>";
    } elseif ($operation == "division" || $operation == "/") {
        if ($num2 != 0) {
            $result = $num1 / $num2;
            echo "$num1 / $num2 = $result" . "<br>";
        } else {
            echo "Error: Division by zero is not allowed!" . "<br>";
        }
    } elseif ($operation == "power" || $operation == "**") {
        $result = pow($num1, $num2);
        echo "$num1 ^ $num2 = $result" . "<br>";
    } elseif ($operation == "modulus" || $operation == "%") {
        if ($num2 != 0) {
            $result = $num1 % $num2;
            echo "$num1 % $num2 = $result" . "<br>";
        } else {
            echo "Error: Modulus by zero is not allowed!" . "<br>";
        }
    } else {
        echo "Error: Invalid operation!" . "<br>";
    }
}

// Test the calculator with different operations
echo "<h3>Calculator Tests:</h3>";
calculator(10, 5, "addition");
calculator(10, 5, "subtraction");
calculator(10, 5, "multiplication");
calculator(10, 5, "division");
calculator(10, 3, "power");
calculator(10, 3, "modulus");
