<?php

// Task 1
// Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line without hyphens at start and end
echo implode("-", range(1, 10)) . "\n";

// Task 2
// Remove duplicates and sort array in ascending order
$numbers = [1, 1, 1, 2, 2, 3, 6, 7, 7, 4, 5, 5];
$unique_sorted = array_unique($numbers);
sort($unique_sorted);
print_r($unique_sorted);

// Task 3
// Count the "r" characters in "eraasoft"
$text = "eraasoft";
echo substr_count($text, "r") . "\n";

// Task 4
// FizzBuzz from 1 to 50
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz\n";
    } elseif ($i % 3 == 0) {
        echo "Fizz\n";
    } elseif ($i % 5 == 0) {
        echo "Buzz\n";
    } else {
        echo $i . "\n";
    }
}

// Task 5
// Sum numbers from 0 to 30
$sum = 0;
for ($i = 0; $i <= 30; $i++) {
    $sum += $i;
}
echo "The sum of the numbers 0 to 30 is $sum\n";

// Task 6
// Function to get largest number in array
function getMax($arr) {
    return max($arr);
}
$numbers = [5, 15, -10, 100, 250, 0, 1];
echo "Largest: " . getMax($numbers) . "\n";

// Task 7
// Function to get smallest number in array
function getMin($arr) {
    return min($arr);
}
echo "Smallest: " . getMin($numbers) . "\n";

// Task 8
// Factorial using for loop
$num = 4;
$fact = 1;
for ($i = 1; $i <= $num; $i++) {
    $fact *= $i;
}
echo "Factorial of $num is $fact\n";

// Task 9
// Print odd numbers from 1 to 15 using while loop
$i = 1;
while ($i <= 15) {
    if ($i % 2 != 0) {
        echo $i . "\n";
    }
    $i++;
}

// Task 10
// Print even numbers from 1 to 15 using while loop
$i = 1;
while ($i <= 15) {
    if ($i % 2 == 0) {
        echo $i . "\n";
    }
    $i++;
}

// Task 11
// Print keys and values of associative array using foreach
$person = array("name" => "John", "age" => 30, "city" => "New York");
foreach ($person as $key => $value) {
    echo "$key => $value\n";
}

// Task 12
// Sum values in an associative array using foreach
$sales = array("Jan" => 100, "Feb" => 200, "Mar" => 150);
$total = 0;
foreach ($sales as $value) {
    $total += $value;
}
echo "Total sales: $total\n";

// Task 13
// Multiplication table of 8 using for loop
for ($i = 1; $i <= 10; $i++) {
    echo "8 x $i = " . (8 * $i) . "\n";
}

// Task 14
// Print elements of multidimensional array using nested foreach
$students = array(
    array("name" => "John", "age" => 20, "grade" => "A"),
    array("name" => "Mary", "age" => 22, "grade" => "B"),
    array("name" => "Tom", "age" => 18, "grade" => "A")
);
foreach ($students as $student) {
    foreach ($student as $key => $value) {
        echo "$key: $value\n";
    }
    echo "---\n";
}

// Task 15
// Numbers divisible by 3 between 1 and 100 using do while loop
$i = 1;
do {
    if ($i % 3 == 0) {
        echo $i . "\n";
    }
    $i++;
} while ($i <= 100);

?>
