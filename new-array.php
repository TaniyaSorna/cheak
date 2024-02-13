<?php
$numbers = [4, 5, 8, 1];
// echo array_sum($numbers);

// dump
$name = [];
// var_dump($name);

$n = 3;
// var_dump($n);

// push

$name = [];

// print_r($name);
array_push($name, 'Tania');
array_push($name, 'Shorna');

// print_r($name);

$language = [];
$framework = ['react', 'laravel', 'go', 'vue'];
for ($i = 0; $i < count($framework); $i++) {
    // array_push($language, $framework[$i]);
    // $language[] = $framework[$i];
}
// print_r($language);

$language = [];
$framework = ['react', 'laravel', 'go', 'vue'];
foreach ($framework as $item) {
    // echo $item . PHP_EOL;
    // echo $language[] = $item . PHP_EOL;
}

// trim
$name = ' Hello ';
// echo $name;
// echo trim($name);

// slice
$language = ['php', 'laravel', 'go', 'python', 'c', 'c++', 'c#'];
$slice = array_slice($language, 0, 3);
// print_r($slice);
array_splice($language, 0, 2, 'hello world');
// print_r($language);

// search
$names = ['php', 'laravel', 'go', 'python', 'c', 'c++', 'c#'];
if (in_array('laravel', $names)) {
    // echo 'find';
} else {
    // echo 'not fund';
}

$names = ['php', 'laravel', 'go', 'python', 'c', 'c++', 'c#'];

if (in_array('hello', $names)) {
    // echo 'find';
} else {
    // echo 'not fund';
}

// marge

$name = ['akib', 'zaman', 'hadi'];
$age = [20, 15, 18];
$address = ['Magura', 'Khulna', 'Bangladesh'];
$new_arr = array_combine($name, $age); //for two array
// print_r($new_arr);
// print_r(array_merge($name, $age, $address)); // for multiple array
// print_r($thired);

// md5
$pass = "hello";
// echo md5($pass);

$pass = "tania";
echo md5($pass);
echo PHP_EOL;
$pass = "Tania";
echo md5($pass);
echo PHP_EOL;
$pass = "shorna";
echo md5($pass);
echo PHP_EOL;
$pass = "Shorna";
echo md5($pass);
echo PHP_EOL;
$pass = "taniashorna";
echo md5($pass);
echo PHP_EOL;
$pass = "Taniashorna";
echo md5($pass);
echo PHP_EOL;
$pass = "TaniaShorna";
echo md5($pass);
