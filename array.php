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

$fruits = ["Banana", "Apple", "Orange"]; 

echo '<pre>';

var_dump($fruits);

echo '</pre>'; 

echo $fruits[2]; 

$fruits[4] = 'Coconut'; 

echo '<pre>';

var_dump($fruits);

echo '</pre>'; 

echo array_pop($fruits); 

echo '<pre>';

var_dump($fruits);

echo '</pre>'; 

$string = "India, Bangladesh, Pakistan";

echo '<pre>';

var_dump(explode(",", $string));

echo '</pre>'; 

$person = [
    'name' => 'Brad',
    'surname' => 'Travsery',
    'age' => 30,
    'hobbies' => ['book reading', 'youtubing']  

];

echo '<pre>';

print_r($person);

echo '</pre>';

echo $person['age'] . '<br>';

if (!isset($person['address'])){
    $person['address'] = 'unknown'; 
}

echo '<pre>';

var_dump($person);

echo '</pre>';

$counter = 0; 

while ($counter<10){
    echo $counter. '<br>';
    $counter++;  
}

function hello($firstname)
{
    echo "Hello I'm $firstname";
}

hello('Fysal');

function sum(...$num){
 
echo '<pre>';

var_dump($num);

echo '</pre>';

} 

echo sum(1, 7, 5, 4, 5); 

echo date('Y-m-d H:i:s'). '<br>'; 

echo __DIR__. '<br>'; 
echo __FILE__. '<br>'; 


?>

</body>

</html>




    



