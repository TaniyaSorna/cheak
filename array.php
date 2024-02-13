<?php
$s = ["Tania", "Shorna", "Layeb", "Rony"];
// print_r($s);
// echo $s[1];
// echo count($s);
for ($i = 0; $i < count($s); $i++) {
    // echo "$s[$i] <br>";
}

foreach ($s as $arr_item) {
    // echo $arr_item . "<br>";
}

// assosiative array 
$person = [
    'name' => 'Tania Shorna',
    'age' => 20,
    'mobile' => "01234567",
    'address' => 'Faridpur'
];
// echo $person['name'];
// echo $person['age'];
// echo $person['mobile'];
// echo $person['address'];
// print_r(array_values($person));

foreach ($person as $person_key => $person_value) {
    // echo "$person_key : $person_value <br>";
    // echo $person_key . "<br>";
}

// combain array
$name = ['Tania', 'Shorna', 'Mr.Khan'];
$age = [20, 20, 43];
$new_arr = array_combine($name, $age);
// print_r($new_arr);
foreach ($new_arr as $key => $value) {
    // echo "$key : $value <br>";
}

// multidimantional array
$arr = [
    ['Tania', 'Shorna', 'Mr.Khan'],
    [20, 20, 43],
    ['Kamarkhali', 'Madhukhali', 'Faridpur']
];
// print_r($arr[0]);
// echo $arr[0][2];
// echo $arr[2][0];

$person = [
    ['name' => 'Tania Shorna'],
    ['age' => 20],
    ['address' => 'Faridpur']
];
// echo $person[0]['name'];
// echo $person[1]['age'];
// echo $person[2]['address'];

// push array
$name = ['Tania', 'Shorna', 'Layeb', 'Roni'];
// array_push($name, 'Mr. Khan');  //insert in last
// array_unshift($name, 'Mr. Khan'); //insert in first
// print_r($name);

// pop array
$name = ['Tania', 'Shorna', 'Layeb', 'Roni'];
// array_pop($name); //delete in last
// array_shift($name); //delete in first
// print_r($name);

// sort
$n = [10, 20, 15, 3, 2, 1];
sort($n);
print_r($n);
