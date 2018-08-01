<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PHP Assignments</title>
	</head>
	<style type="text/css">
		body{
			width: 90%;
			margin: 0px auto;
		}
	</style>
	<body>
		<div>
			<?php
function maxNumber($num1, $num2)
{
    if ($num1 > $num2) {
        return $num1;
    } else {
        return $num2;
    }
}
echo "<h3>Highest between Two numbers.</h3>";
echo maxNumber(11, 12);
echo "<hr/>";
// The following function will identify the max number among three different numbers
function maxOfThree($num1, $num2, $num3)
{
    if ($num1 > $num2 && $num1 > $num3) {
        return $num1;
    } elseif ($num2 > $num1 && $num2 > $num3) {
        return $num2;
    } else {
        return $num3;
    }
}
echo "<h3>Highest Among Three numbers.</h3>";
echo maxNumber(14, 20, 17);
echo "<hr/>";
//this function will return true if the character is vowel else return false
function vowelChecker($char)
{
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $result = false;
    for ($i = 0; $i < count($vowels); $i++) {
        if (!strcmp($char, $vowels[$i])) {
            $result = true;
        }
    }
    if ($result) {
        return "True";
    }

    return "False";
}
$char = 'c';
echo "<h3>Vowel Checker</h3>";
echo vowelChecker($char);
echo "<hr/>";
//The following function calculate the total sum of the numbers inside an array names numbers[]
function sum($numbers)
{
    $result = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        $result += $numbers[$i];
    }
    return $result;
}
//The following function calculate the total mulplication of the numbers inside an array names numbers[]
function multiply($numbers)
{
    $result = 1;
    for ($i = 0; $i < count($numbers); $i++) {
        $result *= $numbers[$i];
    }
    return $result;
}
$numbers = [1, 3, 5, 7];
echo "<h3>Sum & Multiply</h3>";
echo 'Sum: ' . sum($numbers) . "<br/>";
echo 'Multiply: ' . multiply($numbers);
echo "<hr/>";
//The following function will find the longest word from an array
function findLongestWord($words)
{
    $count = 0;
    for ($i = 1; $i < count($words); $i++) {
        $count = strlen($words[$i - 1]);
        if ($count < strlen($words[$i])) {
            $count = strlen($words[$i]);
        }
    }
    return $count;
}
$words = ['hello', 'selllo', 'hi', 'bye', 'test', 'Hello World from Java Script.', 'abiral gurung'];
echo "<h3>Find Longest Word</h3>";
echo findLongestWord($words);
echo "<hr/>";
//Filter words
function filterLongWords($words, $i)
{
    $newArray = [];
    for ($j = 0; $j < count($words); $j++) {
        if ($i < strlen($words[$j])) {
            array_push($newArray, $words[$j]);
        }
    }
    return $newArray;
}
$words = ['hello', 'selllo', 'hi', 'bye', 'test', 'abiral gurung', 'Hello World from Java Script.'];
$i = 5;
echo "<h3>Word Filter</h3>";
print_r(filterLongWords($words, $i));
echo "<hr/>";
/*
PRIME NUMBER
 */
function primeNumbers($num1, $num2)
{
    $primeNumber = [];
    for ($i = $num1; $i < $num2; $i++) {
        $counter = true;
        for ($j = 2; $j < $i; $j++) {
            if ($i % $j == 0) {
                $counter = false;
                break;
            }
        }
        if ($counter) {
            array_push($primeNumber, $i);
        }
    }
    return $primeNumber;
}
echo "<h3>Prime Numbers</h3>";
print_r(primeNumbers(10, 50));
echo "<hr/>";
// The following function will do the bouble sort for us
function sortingFunction($numbers)
{
    $i = 0;
    $j = 0;
    $temp = 0;
    $size = count($numbers);
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size; $j++) {
            if ($numbers[$i] < $numbers[$j]) {
                $temp = $numbers[$i];
                $numbers[$i] = $numbers[$j];
                $numbers[$j] = $temp;
            }
        }
    }
    return $numbers;
}
$numbers = [2, 1, 5, 3, 20, 19, 35, 6, 7, 9, 10];
echo "<h3>Bouble sort Example</h3>";
print_r(sortingFunction($numbers));
echo "<hr/>";
?>
		</div>
	</body>
</html>