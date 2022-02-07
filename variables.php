<?php
$num1 = 10;
$num2 = 30.665;
$name = "Harrison Wekesa";
$age = 23;
$cars = array("volvo", "Toyota", "Mercedes", "Mobius");

echo "This is an integer $num1";
echo "<br>This is a float: $num2";
echo "<br>My name is $name. I am $age years old";


echo "<br>";
var_dump($name);
echo "<br>";
var_dump($num2);
echo "<br>";
var_dump($num1);
echo "<br>";
var_dump($cars);
echo"<br>";

echo $num1 + $num2;
echo "<br>";
echo $num2/$num1;
echo "<br>";

#If statement
$t = date("H");

if ($t < "20"){
    echo "Have a good day";
}
echo "<br>";

#If else statement
if ($t < "20"){
    echo "Have a good day";
}
else echo "Have a good night";

echo "<br";

#the if...elseif...else statement
if ($t < 10){
    echo "Good morning";
}elseif ($t < 20 & $t > 10){
    echo "Good Day";
}else{
    echo "Good Night";
}

echo "<br>";
echo "<br>";
#The switch statement
$gari = "Toyota";

echo "<br>";
#The while loop
$n = 0;
while ($n <= 7){
 echo "<br>The number is $n";
 $n ++;
}

echo "<br>";


#The do while loop
$q = 0;
do{
    echo "<br> I am number $q";
    $q++;
}while($q < 10);
echo "<br>";
echo "<br>";


#The for loop
for($i = 0; $i <= 10; $i++){
    echo "The value of i is $i<br>";
}
echo "<br>";

#The foreach loop
foreach ($cars as $gani){
    echo "$gani<br>";
}



#The Switch statement
echo "<br>";
switch ($gari){
    case "Hyundai":
        echo "Your favourite car is Hyundai";
        break;
    case "Volvo":
        echo "Your favourite car is volvo";
        break;
    case "Toyota":
        echo "Your favourite car is Toyota";
        break;
    case "Mitsubishi":
        echo "Your favourite car is Mitsubishi";
        break;
}
