<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint"
          content = "width=device-width">
    <meta http-equiv="X-UA-Compatible">
    <title>Document</title>
</head>

<body>

<?php

$a= 3;
$b=4;
$c=1.2; 

echo $a+$b+$c;

echo ($a+$b)*$c. '<br>'; 

echo ($b-$a)/$c. '<br>'; 

$a += $b; // it means $a = $a+$b 3+4=7; 

echo $a. '<br>';



echo $a++. '<br>'; //value is 7 and after print its 7+1=8
echo ++$a. '<br>'; // 1+8=9

echo $a--. '<br>'; // value is 9 and after print its 9-1=8
echo --$a. '<br>'; //its -1+8=7 and value is 7 

echo is_int(4). "<br>"; //if true then it will show 1 if false then it will show nothing 

echo " max (2, 5, 9) = " .  max(2, 5, 9) . "<br>"; 
echo "min (2, 5, 9) = " . min(2, 5, 9) . '<br>';


$number =1234.1233; 
echo "number_format"($number, 2, '.', ',');   


$name='Fysal';

echo '<br>' . "Hello " . $name;   

$string = 'Fysal'; 

echo '<br>' . strlen($string). '<br>'; 

$longText="Hello I'm <b>Fysal</b>. I'm 27 years old. I 
lives in Bangladesh. I'm learning php."; 


echo $longText. '<br>'; 

echo '<br>'. nl2br($longText). '<br>'; 












?>

</body>

</html>




    



