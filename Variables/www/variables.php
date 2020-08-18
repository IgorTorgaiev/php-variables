<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Creating PHP Variables -->

<!-- <?php
$txt = "I have 20 apples. I have eaten 5. How many are left. Pick one correct answer below";
$a = 16;
$b = 15;
$c = 10;

echo $txt;
echo "<br>";
echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo $c;
echo "<br>";
?> -->

<!-- Output Variables -->
<!-- <?php
$text = "Chopin";
echo "I love $text!"; 
?> -->

<!-- <?php
$notes = "guitar";
$text = "piano";
echo "I prefer playing the " .$notes. " to playing the " .$text. "!";
?> -->

<!-- Now, it's time to revise some Maths -->

<!-- <?php
$x = 10;
$y = 15;
echo "So how much will be " .$x. " + " .$y. " ?<br>";
echo $x + $y; 
?> -->

<!-- Global and Local Scope -->

<!-- <?php
$x = 5;

function myExamination() {
    echo "<p>When the variable x is inside the function it will not be visible in the browser, just see: $x<p>";
}

myExamination();

echo "<p>The variable x outside the function can be accessed, like here: $x<p>";
?> -->

<!-- Global keyword -->

<!-- <?php
$a = 10;
$b = 12;

// function myTest() {
//     global $a, $b;
//     $b = $a + $b;
// }

// myTest();
// echo $b;


// function myTest() {
//     $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
// }

// myTest();
// echo $b;
?> -->


<!-- Static Keyword -->

<!-- <?php
function myTest() {
    static $a = 0;
    echo $a;
    $a++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
?> -->

</body>
</html>