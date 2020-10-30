<?php

$a =4;
$b =3;
$c = "Result can not be out";

if($b <5 && $a> 0){
    $c = $a/$b;
}

// example
$age = 10;

if($age > 15){
    echo 'you are allowed';
}elseif ($age < 15) {
    echo 'minors are not allowed to party';
}else {
    echo 'try again next time';
}

// example === multiplication table
$N = 3;

for($i = 1; $i <=12; $i++){
    $result = $N*$i;
    echo $N . ' x ' . $i . ' = ' . $result . '<br>';
}


// example
$age = 14;

if($age > 13 && $age <=16 ){
    echo 'You are a teenager';
}elseif ($age >= 18) {
    echo 'You are an adult, you can vote';
}else {
    echo 'You are still a child';
}

// example
$a=50;
$b=15;

if($a>$b){
  echo  $result = "a is greater";
}else{
  echo  $result = 'b is greater';
}


// Ternary Operator : Condition? true: false;
$result=  $a > $b ?  "a is greater" :  'b is greater';
echo  $result;
?>