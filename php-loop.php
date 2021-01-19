<?php 
// 1. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no
// hyphen(-) at the starting and ending position.
// Expected Output: 1-2-3-4-5-6-7-8-9-10

$number;
for($number=1; $number<=10; $number++){
    echo $number."-";
}
echo '<br/>';

// --------------------------
// 2. Create a script using a for loop to add all the integers between 0 and 30 and
// display the total.
// Expected Output = total as a number
$total = 0;
for($number1=0 ; $number1<=30 ; $number1++){
$total = $total + $number1;
}
echo $total;

echo '<br/>';

// --------------------------
// 3c. Create a script to construct the following pattern, using nested for loop.
// A A A A A
// A A A B B
// A A C C C
// A D D D D
// E E E E E

for($i=1 ; $i<=5 ; $i++){
    echo str_repeat("A ", 5).'<br/>';

}


echo '<br/>';


// --------------------------
// 3b. Create a script to construct the following pattern, using nested for loop.
// 1 1 1 1 1
// 1 1 1 2 2
// 1 1 3 3 3
// 1 4 4 4 4
// 5 5 5 5 5

echo '<br/>';

// --------------------------
// 4. Create a script to construct the following pattern, using a nested for loop.
// 1 0 0 0 0
// 0 2 0 0 0
// 0 0 3 0 0
// 0 0 0 4 0
// 0 0 0 0 5

echo '<br/>';

// --------------------------
// 5. Write a program to calculate and print the factorial of a number using a for
// loop. The factorial of a number is the product of all integers up to and including
// that number, so the factorial of 5 is 5*4*3*2*1= 120.
$factorial=5;
for($num = 1 ; $num <$factorial ; $num++ ){
    $num = $factorial * $num; 
}
$num = 5;
$factorial =1;
for($i=$num ; $i>=1 ; $i--){
    $factorial = $factorial * $i;
}
echo "$num factorial is $factorial";
echo '<br/>';

// --------------------------
// 6. Write a program to calculate and print the Fibonacci sequence using a for loop

echo '<br/>';

// --------------------------
// 7. Write a program which will count the "c" characters in the text
// "OrangeAcademy".
$string = "OrangeAcademy";
$char="c";
$count="0";
for($i="0"; $i< strlen($string) ; $i++){ 
    if(substr($string, $i ,1)==$char)
    {$count=$count+1;}
}
echo $count;
echo '<br/>';

// --------------------------
// 8. Write a PHP script that creates the following table using for loops. Add
// cellpadding="3px" and cellspacing="0px" to the table tag.
// 1 * 1 = 11 * 2 = 2 1 * 3 = 3 1 * 4 = 4 1 * 5 = 5
// 2 * 1 = 22 * 2 = 4 2 * 3 = 6 2 * 4 = 8 2 * 5 = 10
// 3 * 1 = 33 * 2 = 6 3 * 3 = 9 3 * 4 = 123 * 5 = 15
// 4 * 1 = 44 * 2 = 8 4 * 3 = 124 * 4 = 164 * 5 = 20
// 5 * 1 = 55 * 2 = 105 * 3 = 155 * 4 = 205 * 5 = 25
// 6 * 1 = 66 * 2 = 126 * 3 = 186 * 4 = 246 * 5 = 30

echo '<br/>';


// --------------------------
// 9. Write a PHP script using nested for loop that creates a chess board as shown
// below.
// Use table width="270px" and take 30px as cell height and width.

echo '<br/>';

// --------------------------
// 10. Write a PHP script that creates the following table (use for loops).
// 1 2 3 4 5 6 7 8 9 10
// 2 4 6 8 101214161820
// 3 6 9 12151821242730
// 4 8 1216202428323640
// 5 101520253035404550
// 6 121824303642485460
// 7 142128354249566370
// 8 162432404856647280
// 9 182736455463728190
// 102030405060708090100






?>