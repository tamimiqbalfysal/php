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

$name = 'fysal';

$age= 27; //not all variable need colon 

$ismale= true;

$height= 5.7; 

$salary=null;

echo $name.'<br>';
echo $age. '<br>';
echo $ismale. '<br>';
echo $height. '<br>';
echo $salary. '<br>'; 

echo gettype ($name). '<br>';
echo gettype ($age). '<br>';
echo gettype ($ismale). '<br>';
echo gettype ($height). '<br>';
echo gettype ($salary). '<br>'; 

var_dump($name, $age, $ismale, $height, $salary);

is_string($name); 

isset($name); 
isset($Address); 

define ('PI', 3.14);
echo PI. '<br>'; 

echo SORT_ASC.'<br>'; // used for sorting in ascending order 
echo PHP_INT_MAX. '<br>'; //maximum intiger php can handle 









?>




</body>
</html>




    



