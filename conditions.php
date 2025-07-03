<?php

$A = 500;
$B = 70;

if ($A > $B) {
    echo "A is greater than B<br>";
} elseif ($A < $B) {
    echo "A is less than B<br>";
} else {
    echo "A is equal to B<br>";
}

$age =10;
echo "Your age is $age<br>";
if ($age >=18) {
    echo "You can eat cookies With Alcohol<br>";
}
elseif ($age < 13){
    echo "You can Drink only Milk<br>";
}
else {
    echo "You can eat cookies with Milk";
}


$driver_age = "0";

echo "Your driving age is $driver_age<br>";

if($driver_age>=18 && $driver_age <= 60) {
    echo "You can drive a truck <br>";
}elseif ($driver_age == 0) {
    echo "You are not born yet<br>";
}
 elseif ($driver_age < 18) {
    echo "You are too young to drive a car<br>";
} elseif ($driver_age > 60) {
    echo "You are too old to drive a car<br>";
} 
 else {
    echo "Invalid age for driving<br>";
}

?>