<?php
// echo ("hello Tania");

$name = 'Tania Shorna';
// echo strlen($name);

function sum($x, $y)
{
    $z = $x + $y;
    echo $z;
}
// sum('10', '5');

function greetings($name)
{
    echo "hi $name!";
}
// greetings('Shorna');

// $n = "10";
// if (is_numeric($n)) {
//     echo 'The is numeric';
// } else {
//     echo 'This is not numeric';
// }

// $n = "10a";
// if (is_numeric($n)) {
//     echo 'The is numeric';
// } else {
//     echo 'This is not numeric';
// }

function add($a, $b = 10)
{
    return  $a + $b;
}
// echo add(20);

function sub($a, $b = 10)
{
    return  $a - $b;
}
// echo sub(20, 5);

// (function () {
//     echo "hello from anonymus";
// })();

// namta
$n = 3;
for ($i = 1; $i <= 10; $i++) {
    // echo ($i . ' * ' . $n . ' = ' . $i * $n);
    // echo PHP_EOL;
}
